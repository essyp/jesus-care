<?php

namespace App\Providers;
define('ACTIVE','1');
define('INACTIVE','2');
define('COMPLETED','3');
define('CANCELED','4');
define('PROCESSING','5');
define('PROCESSED','6');
define('YES','1');
define('NO','2');
define('ADMIN','1');
define('SUPER_ADMIN','2');
define('MANAGER','3');
define('SUCCESSFUL','1');
define('UNSUCCESSFUL','2');
define('USER','2');
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Cart;
use App\Models\Ministry;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\ParishMessage;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use App\Models\PaymentGateway;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $comm = Company::first();
        view()->share('comm',$comm);

        $ministry = Ministry::where('status',1)->get();
        view()->share('ministry',$ministry);

        $payment_gateway = PaymentGateway::where('status',1)->get();
        view()->share('payment_gateway',$payment_gateway);

        $footerblog = Blog::where('status',1)->where('featured',1)->limit(2)->get();
        view()->share('footerblog',$footerblog);

        $blogfeatured = Blog::where('status',1)->where('featured',1)->limit(4)->get();
        view()->share('blogfeatured',$blogfeatured);

        $category = BlogCategory::where('status',1)->get();
        view()->share('category',$category);

        $productfeatured = Product::where('status',1)->where('featured',1)->limit(4)->get();
        view()->share('productfeatured',$productfeatured);

        $productcategory = ProductCategory::where('status',1)->get();
        view()->share('productcategory',$productcategory);

        $message = ParishMessage::where('status',1)->first();
        view()->share('message',$message);

        View::composer('*', function($view) {
            if(Auth::guard('user')->user()){
                $totalcart = Cart::where('user_id',Auth::guard('user')->user()->id)->count();
                view()->share('totalcart',$totalcart);

                $user = User::where('id',Auth::guard('user')->user()->id)->first();
                view()->share('user',$user);
            }else{
                $totalcart = '0';
                view()->share('totalcart',$totalcart);
            }
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
