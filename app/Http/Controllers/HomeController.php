<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Mail;
use Session;
use GuzzleHttp\Exception\GuzzleException;
use DB;
use App\Models\Banner;
use App\Models\Ministry;
use App\Models\Event;
use App\Models\Blog;
use App\Models\Testimony;
use App\Models\ParishMessage;
use App\Models\Company;
use App\Models\Team;
use App\Models\Gallery;
use App\Models\Enquiry;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Cart;
use App\Models\Payment;
use App\Models\PaymentGateway;
use App\Models\Newsletter;
use App\Models\Donation;

class HomeController extends Controller
{
    public function getHome() {
        $banner = Banner::where('status',1)->orderBy('id', 'DESC')->get();
        $ministry = Ministry::where('status',1)->where('featured',1)->limit(4)->get();
        $events = Event::where('status',1)->orderBy('start_date', 'desc')->limit(2)->get();
        $blog = Blog::where('status',1)->where('featured',1)->limit(3)->get();
        $testimony = Testimony::where('status',1)->where('featured',1)->get();
        $message = ParishMessage::where('status',1)->first();
        return view('front/index', compact('banner','ministry','events','blog','testimony','message'));
    }

    public function getAbout() {
        $com = Company::first();
        return view('front/about', compact('com'));
    }

    public function getContact() {
        $com = Company::first();
        return view('front/contact', compact('com'));
    }

    public function getTeams() {
        $teams = Team::where('status',1)->get();
        return view('front/teams', compact('teams'));
    }

    public function getTestimonies() {
        $testimony = Testimony::where('status',1)->orderBy('id', 'desc')->paginate(12);
        return view('front/testimonies', compact('testimony'));
    }

    public function getTestimonyDetails($id) {
        $testimony = Testimony::where('slug',$id)->first();
        return view('front/testimony-details', compact('testimony'));
    }

    public function sendEnquiry(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'min:7', 'max:80', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/'],
            'name' => 'required|string',
            'tel' => ['required','min:11','regex:/^[\+\d]?(?:[\d()]*)$/','max:14'],
            'message' => 'required',
        ]);
        if ($validator->fails()){
            $response = array(
                "status" => "unsuccessful",
                "message" => $validator->messages()->first(),
                );
                return Response::json($response);
        }
        
        $item = new Enquiry();
        $item->name = $request->name;
        $item->email = $request->email;
        $item->tel = $request->tel;
        $item->message = $request->message;
        $item->status = 1;
        if($item->save()){
            $response = array(
                "status" => "success",
                "message" => "Thanks for contacting us. One of us will contact you shortly",
            );
                $this->sendContactMail("Thanks for contacting us",$request->email,$request->name);
            return Response::json($response); //return status response as json
        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Error sending message . Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }
    
    public function sendContactMail($subject,$email,$name){
        $data = array(
                'name'=> $name,
                'email'=> $email,
                'subject'=> $subject
        );
    
        Mail::send('mails/contact', $data, function($message)
            use($email,$subject,$name) {
                $com = Company::where('id','1')->first();
                $message->from($com->email, $com->fullname);
                $message->to($email, $name)->subject($subject);
        });
    }

    public function genPasswordResetLink(){
        $id = Str::random(20);
        $validator = \Validator::make(['id'=>$id],['id'=>'unique:users,password_reset']);
        if($validator->fails()){
             return $this->genPasswordResetLink();
        }
        return $id;
    }
    
    public function forgotPassword(Request $request){
        $email = $request->email;
        $id = $this->genPasswordResetLink();
        $link = url('/')."/reset-password/".$id;
        $count = User::where('email', '=',$email)->count();
            if($count == 1) {
                $item = User::where('email',$email)->first();
                $item->password_reset = $id;
                $item->save();
                
                $name = $item->fname." ".$item->lname;
                $this->forgetPasswordMail("Reset Your Password",$email,$name,$link);
                $response = array(
                    "status" => "success",
                    "message" => "Password reset link sent to your email",
                );
                return Response::json($response);
            } else {
    
                $response = array(
                    "status" => "unsuccess",
                    "message" => "Email does not exist on our database",
                );
                return Response::json($response); //return status response as json
        }
    
    }
    public function forgetPasswordMail($subject,$email,$name,$link){
        $data = array(
                'link'=> $link,
                'name'=> $name,
                'email'=> $email,
                'subject'=> $subject
        );
        Mail::send('mails/password-reset', $data, function($message)
            use($email,$subject,$name,$link) {
            $com = Company::first();
            $message->from($com->email, $com->fullname);
            $message->to($email, $name)->subject($subject);
        });
    }

    public function getPasswordReset($id) {
        $user = User::where('password_reset',$id)->first();
        $email = $user->email;
    
         return view('front/reset-password', compact('user','id','email'));
    }

    public function resetPassword(Request $request){
        $id = $request->id;
        $email = $request->email;
        $password = $request->password;
        $count = User::where('password_reset', '=',$id)->count();
            if($count == 1) {
                $pass = User::where('password_reset',$id)->first();
                $pass->password = bcrypt($password);
                $pass->save();
               
                User::where('id',$pass->id)->update(['password_reset' => null]);
                
                $name = $pass->fname." ".$pass->lname;
                $this->resetPasswordMail("Password Reset Successful",$email,$name);
                $response = array(
                    "status" => "success",
                    "message" => "You have successfully changed your password. You can now login",
                );
                return Response::json($response);
            } else {
    
                $response = array(
                    "status" => "unsuccess",
                    "message" => "Error changing password. Please try again",
                );
                return Response::json($response); //return status response as json
        }
    
    }

    public function resetPasswordMail($subject,$email,$name){
        $data = array(
                'name'=> $name,
                'email'=> $email,
                'subject'=> $subject
        );
        Mail::send('mails/password-reset-success', $data, function($message)
            use($email,$subject,$name) {
                $com = Company::first();
                $message->from($com->email, $com->fullname);
            $message->to($email, $name)->subject($subject);
        });
    }

    public function getUserActivation($id) {
        $user = User::where('activation_link',$id)->first();
        if(!empty($user)){
            $email = $user->email;
            User::where('id',$user->id)->update(['status' => ACTIVE, 'activation_link' => null]);
            return view('front/user-activation', compact('user','id','email'));
        } else {
            return redirect('login'); 
        }
    }

    public function getOrderView(Request $request){
        $id = $request->id;
        $order = Order::where('id',$request->id)->first();
        $ref = Payment::where('order_id',$request->id)->first();
        return view('user/order-view', compact('order','ref'));
    
    }

    public function getCart() {
        if(Auth::guard('user')->user()){
            $cart = Cart::where('user_id',Auth::guard('user')->user()->id)->orderBy('id', 'desc')->get();
            $total = Cart::where('user_id',Auth::guard('user')->user()->id)->sum('total');
            $total_amount = floor(($total * 0.05)) + $total;
            $vat = 0.05;
            $vat = $total * $vat;
        
            return view('front/cart', compact('cart','total','total_amount','vat'));
        } else {
            return redirect('login');
        }
    }
    
    public function getCheckout() {
        if(Auth::guard('user')->user()){
            $user = Auth::guard('user')->user();
            $cart = Cart::where('user_id',Auth::guard('user')->user()->id)->orderBy('id', 'desc')->get();
            $total = Cart::where('user_id',Auth::guard('user')->user()->id)->sum('total');
            $total_amount = floor(($total * 0.05)) + $total;
            $vat = 0.05;
            $vat = $total * $vat;
            $gateway = PaymentGateway::where('status',1)->get();
            return view('front/checkout', compact('cart','user','total','total_amount','vat','gateway'));
        } else {
            return redirect('login');
        }
    }
    
    public function addToCart(Request $request){
        $user_id = $request->user_id;
        $product_id = $request->product_id;
        $price = $request->price;
        $quantity = "1";
        $total = $quantity *$price;
        $count = Cart::where('user_id', '=',$user_id)->where('product_id', '=' ,$product_id)->count();
            if($count == 1) {
                $response = array(
                    "status" => "unsuccess",
                    "message" => "product is already in your cart",
                );
                return Response::json($response);
            } else {
    
            $item = new Cart();
            $item->user_id = $user_id;
            $item->product_id = $product_id;
            $item->price = $price;
            $item->quantity = $quantity;
            $item->total = $total;
        
            if($item->save()){
        
                $response = array(
                    "status" => "success",
                    "message" => "Product added to your cart",
                );
                return Response::json($response); //return status response as json
            } else {
                $response = array(
                    "status" => "unsuccessful",
                    "message" => "Error adding product to cart . Please try again",
                );
                return Response::json($response); //return status response as json
            }
        }
    }

    public function increaseCart(Request $request){
        $id = $request->id;
    
        $item = Cart::where('id', $id)->update(['quantity'=> DB::raw('quantity+1')]);
        $sql = Cart::select('price', 'quantity')->where('id', '=', $id)->first();
        $total = $sql->price * $sql->quantity;
        $item = Cart::where('id', $id)->update(['total'=> DB::raw($total)]);
        if($item){
    
            $response = array(
                "status" => "success",
                "message" => "Added successfully",
            );
            return Response::json($response); //return status response as json
        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Error adding to cart. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }

    public function decreaseCart(Request $request){
        $id = $request->id;
    
        $item = Cart::where('id', $id)->update(['quantity'=> DB::raw('quantity-1')]);
        $sql = Cart::select('price', 'quantity')->where('id', '=', $id)->first();
        $total = $sql->price * $sql->quantity;
        $item = Cart::where('id', $id)->update(['total'=> DB::raw($total)]);
        if($item){
    
            $response = array(
                "status" => "success",
                "message" => "removed successfully",
            );
            return Response::json($response); //return status response as json
        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Error removing from cart. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }

    public function removeCart(Request $request){
        $id = $request->id;
    
        $item = Cart::where('id',$id)->delete();
    
        if($item){
    
            $response = array(
                "status" => "success",
                "message" => "Product deleted from your cart",
            );
            return Response::json($response); //return status response as json
        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Error deleting product. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }

    public function emptyCart(Request $request){
        $id = $request->id;
    
        $item = Cart::where('user_id',$id)->delete();
    
        if($item){
    
            $response = array(
                "status" => "success",
                "message" => "Your cart is now empty",
            );
            return Response::json($response); //return status response as json
        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Error emptying cart. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }
    
    
    public function order(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'min:7', 'max:80', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/'],
            'fname' => 'required|string',
            'lname' => 'required|string',
            'tel' => 'required|string',
            'address' => 'required|string',
        ]);
    
        if ($validator->fails()) {
         $response = array("status" => "unsuccessful", "message" => $validator->messages()->first());
         return Response::json($response);
        }
        $user_id = $request->user_id;
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $tel = $request->tel;
        $country = $request->country;
        $state = $request->state;
        $city = $request->city;
        $address = $request->address;
        $note = $request->note;
        $total_amount = $request->total_amount;
        $payment_type = $request->payment_type;
        $product = $request->product;
    
        $item = new Order();
        $item->user_id = $user_id;
        $item->name = $fname." ".$lname;
        $item->email = $email;
        $item->tel = $tel;
        $item->country = $country;
        $item->state = $state;
        $item->city = $city;
        $item->delivery_address = $address;
        $item->note = $note;
        $item->total_amount = $total_amount;
        $item->payment_method = $payment_type;
        $item->status = PROCESSING;
        $item->order_code = $this->genOrderCode();
    
        if($item->save()) {;
    
        foreach($product as $pr){
            $pro = explode('*',$pr);
            $insert = array(
                'order_id' => $item->id,
                'product_id' => $pro[0],
                'quantity' => $pro[1],
                'price' => $pro[2],
                'total' => $pro[3]
            );
            OrderedProduct::insert($insert);
        }

        $gateway = PaymentGateway::where('id', $request->payment_type)->first();
              $response = array(
                "status" => "success",
                "email" => $email,
                "fname" => $fname,
                "lname" => $lname,
                "tel" => $tel,
                "amount" => $total_amount,
                "user_id" => $user_id,
                "order_id" => $item->id,
                "code" => $item->order_code,
                "payment_type" => $gateway->slug,
                "public_key" => $gateway->public_key,
                "secret_key" => $gateway->secret_key,
                "payment_gateway_id" => $gateway->id,
                "ref_id" => rand(0, 99999).time(),
            );
           return Response::json($response); //return status response as json
        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Error submitting order. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }
    
    public function genOrderCode(){
        $id = Str::random(10);
        $validator = \Validator::make(['id'=>$id],['id'=>'unique:orders,order_code']);
        if($validator->fails()){
             return $this->genOrderCode();
        }
        return $id;
    }
    
    
    public function verifyTransaction(Request $request){
        $reference = $request->reference;
        $reference = $_POST['reference'];
            $result = array();
            //The parameter after verify/ is the transaction reference to be verified
            $url = 'https://api.paystack.co/transaction/verify/'.$reference;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer '.$request->secret_key]
            );
            $request = curl_exec($ch);
            if(curl_error($ch)){
            echo 'error:' . curl_error($ch);
            }
            curl_close($ch);
            if ($request) {
            $result = json_decode($request, true);
            }
            if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] == 'success')) {
                return Response()->json(['success']);
                //Perform necessary action
            }else{
                return Response()->json(['unsuccess']);
                //return Response::json($result);
            }
    }
    
    
    public function confirmOrderPayment(Request $request){
        $order_id = $request->order_id;
        $user_id = $request->user_id;
        $code = $request->code;
        $reference = $request->reference;
        $amount = $request->amount;
        $payment_gateway_id = $request->payment_gateway_id;
        $status = $request->status;
        $email = $request->email;
        $fullname = $request->fullname;

        $item = new Payment();
        $item->order_id = $order_id;
        $item->user_id = $user_id;
        $item->payment_gateway_id = $payment_gateway_id;
        $item->amount = $amount;
        $item->transaction_id = $reference;
        $item->status = $status;

        if($item->save()){
            $update = Order::where('id',$order_id)->first();
            $update->payment_status = $status;
            $update->save();
            if($status == SUCCESSFUL) {
                Cart::where('user_id',Auth::guard("user")->user()->id)->delete();
            }
            $response = array(
                "status" => "success",
                "code" => $code,
            );
            return Response::json($response); //return status response as json

            $this->orderSuccessMail("Successful Product Order",$email,$fullname,$reference);

        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Order unsuccessful. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }
    
    public function orderSuccessMail($subject,$email,$name,$reference){
        $data = array(
                'reference'=> $reference,
                'name'=> $name,
                'email'=> $email,
                'subject'=> $subject
        );
        Mail::send('mails/order', $data, function($message)
            use($email,$subject,$name,$reference) {
            $com = Company::first();
            $message->from($com->email, $com->fullname);
            $message->to($email, $name)->subject($subject);
        });
    }

    public function orderStatus($ref){
        if($ref){
            $status=Payment::where('transaction_id', $ref)->firstOrFail();
            return view('front/order-status', compact('status'));
        }else{
            return redirect('/');
        }

    }

    public function donationStatus($ref){
        if($ref){
            $status=Payment::where('transaction_id', $ref)->firstOrFail();
            return view('front/donation-status', compact('status'));
        }else{
            return redirect('/');
        }

    }

    public function newsletter(Request $request){
        $email = $request->email;
        $em = Newsletter::where('email', '=', $email)->first();
         if ($em === null) {
    
            $item = new Newsletter();
            $item->email = $email;
            $item->status = ACTIVE;
        
            if($item->save()){
        
                $response = array(
                    "status" => "success",
                    "message" => "Thanks for subscribing to our newsletters.",
                );
        
                //$this->log("Added new blog category. Title - ".$name);
                return Response::json($response); //return status response as json
            } else {
                $response = array(
                    "status" => "unsuccessful",
                    "message" => "Error subscribing . Seems like you are already subscribed",
                );
                return Response::json($response); //return status response as json
            }
        } else{
            $response = array(
                "status" => "unsuccessful",
                "message" => "You are already subscribed. Thanks",
            );
            return Response::json($response); //return status response as json
        }
    }

    public function donation(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'min:7', 'max:80', 'regex:/^[^\s@]+@[^\s@]+\.[^\s@]+$/'],
            'name' => 'required|string',
            'amount' => 'required|integer',
            'tel' => 'required|string',
         ]);
    
        if ($validator->fails()) {
         $response = array("status" => "unsuccessful", "message" => $validator->messages()->first());
         return Response::json($response);
        }
        
        $item = new Donation();
        $item->donor_name = $request->name;
        $item->email = $request->email;
        $item->tel = $request->tel;
        $item->amount = $request->amount;
        $item->comment = $request->comment;
        $item->city = $request->city;
        $item->address = $request->address;
        $item->country = $request->country;
        $item->status = PROCESSING;
        $item->ref_id = rand(0, 99999).time();
    
        if($item->save()) {;
    
            $gateway = PaymentGateway::where('id', $request->payment_type)->first();
              $response = array(
                "status" => "success",
                "email" => $request->email,
                "name" => $request->name,
                "tel" => $request->tel,
                "amount" => $request->amount,
                "payment_type" => $gateway->slug,
                "public_key" => $gateway->public_key,
                "secret_key" => $gateway->secret_key,
                "payment_gateway_id" => $gateway->id,
                "ref_id" => $item->ref_id,
                "donation_id" => $item->id,
                
            );
           return Response::json($response); //return status response as json
        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Error encountered. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }

    public function confirmDonation(Request $request){
       
        $item = new Payment();
        $item->donation_id = $request->donation_id;
        // $item->user_id = $request->user_id;
        $item->payment_gateway_id = $request->payment_gateway_id;
        $item->amount = $request->amount;
        $item->transaction_id = $request->reference;
        $item->status = $request->status;

        if($item->save()){
            $update = Donation::where('id',$request->donation_id)->first();
            $update->status = $request->status;
            $update->save();
            $response = array(
                "status" => "success",
            );
            return Response::json($response); //return status response as json

        } else {
            $response = array(
                "status" => "unsuccessful",
                "message" => "Order unsuccessful. Please try again",
            );
            return Response::json($response); //return status response as json
        }
    }
}
