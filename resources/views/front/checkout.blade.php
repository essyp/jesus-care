@if(empty(Auth::guard('user')->user()))
    <script>window.location.href = "{{url('user/login')}}";</script>
@endif
@extends( 'layouts.app' )

@section('title','Checkout')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Checkout</h1>
        {{--  <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('marketplace')}}">Cloud Marketplace</a></li>
            <li><a href="{{url('shopping-cart')}}">Cart</a></li>
            <li><a href="javascript:void(0);">Checkout</a></li>
        </ul>  --}}
    </div>
</div>
<div class="section-block grey-bg">
    <div class="container" id="refresh">
        @if(count($cart) >= 1)
        <form id="order-form" class="primary-form-2 mt-15">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-8 col-sm-10 col-12" id="1">
                <h4>User Information</h4><br>
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <label>First Name</label>
                            <input type="text" name="fname" value="{{$user->fname}}" required>
                        </div>
                        <div class="col-sm-6 col-12">
                            <label>Last Name</label>
                            <input type="text" name="lname" value="{{$user->lname}}" required>
                        </div>
                        <div class="col-sm-6 col-12">
                            <label>Email Address</label>
                            <input type="email" name="email" value="{{$user->email}}" readonly>
                        </div>
                        <div class="col-sm-6 col-12">
                            <label>Phone Number</label>
                            <input type="tel" name="tel" value="{{$user->tel}}" required>
                        </div>
                        <div class="col-sm-4 col-12">
                            <label>Country</label>
                            <input type="text" name="country" value="{{$user->country}}" required>
                        </div>
                        <div class="col-sm-4 col-12">
                            <label>State</label>
                            <input type="text" name="state" value="{{$user->state}}" required>
                        </div>
                        <div class="col-sm-4 col-12">
                            <label>City</label>
                            <input type="text" name="city" value="{{$user->city}}" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <label>Contact Address</label>
                            <input type="text" name="address" value="{{$user->address}}" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <label>Any Note</label>
                            <textarea name="note"></textarea>
                        </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h4><strong>PAYMENT OPTION</strong></h4><br>
                        <div class="payment-option">
                            <div class="row">
                                @foreach($gateway as $gate)
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <span><input type="radio" id="{{$gate->id}}" value="{{$gate->id}}" name="payment_type" checked/>  {{$gate->name}}</span>
                                        <p>(Visa,Verve, Mastercard, etc)<br> <img src="{{asset('images/payments/'.$gate->logo)}}" style="max-width: 100px; max-height: 40px;"/></p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-5 col-12">
                <h4>My Cart</h4>
                @foreach($cart as $ct)
                <div class="shop-cart-box">
                    <div class="row no-gutters">
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="shop-cart-box-info">
                                <img src="{{asset('images/products/'.$ct->product->image)}}" style="max-height: 30px; max-width: 30px" alt="img">
                                <span><a href="{{url('shop/'.$ct->slug)}}">{{$ct->product->pname}}</a></span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="shop-cart-box-quantity">
                                <input type="text" value="{{$ct->quantity}}" style="width: 40px; height:30px">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="shop-cart-box-price">
                                <h5>{{$comm->currency}}{{number_format($ct->total)}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="shop-cart-info-price clearfix">
                    <ul class="right-info-price">
                        <li>Total Price: <h6>{{$comm->currency}}{{number_format($total)}}</h6></li>
                        <li>Vat 0%: <h6>0.00</h6></li>
                    </ul>
                    <div class="total-price">
                        <p>Total: <strong>{{$comm->currency}}{{number_format($total,2)}}</strong></p>
                    </div>
                </div>

                

                <div class="mt-25 right-holder">
                    @foreach($cart as $cartitem)
                    <input name="product[]" type="hidden" value="{{$cartitem->product_id}}*{{$cartitem->quantity}}*{{$cartitem->price}}*{{$cartitem->total}}" />
                    @endforeach
                    <input type="hidden" class="form-control" value="{{$user->id}}" name="user_id" id="user_id">
                    <input name="total_amount" id="total_amount" type="hidden" value="{{$total}}" />
                    <button type="submit" class="button-md button-primary">Complete Order</button>
                </div>
            </div>
        </div>
    </form>
        @else
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <p>Your cart is empty!! Go to <a href="{{url('marketplace')}}">products</a> to add to your cart</p>
            </div>
        </div>
        @endif
    </div>
</div>


    @endsection

@section('script')
<script src="https://js.paystack.co/v1/inline.js"></script>
<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>

<script>
var ord_ary = [];
function payWithPaystack(){
    let amount = ord_ary.amount;
    //let amount = 1;
       var mystring = amount+'00';
     var handler = PaystackPop.setup({
            key: ord_ary.public_key, //replace this with your key
            email: ord_ary.email,
            amount: mystring,
            ref: ord_ary.ref_id, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Full Name",
                        variable_name: "full_name",
                        value: ord_ary.fname+" "+ord_ary.lname,
                    },
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: ord_ary.tel,
                    },
                    {
                        display_name: "Email",
                        variable_name: "email",
                        value: ord_ary.email,
                    }
                ]
            },
            callback: function(response){
                //For confirming payment
                var message = 'Success!!! Your transaction ref is: ' + response.reference;
//
                $.ajax({

                    url: "{{url('/transaction/verify')}}",
                    type: "POST",
                    data: {
                        "reference": response.reference,
                        "secret_key": ord_ary.secret_key,
                        "_token":$('input[name=_token]').val(),
                    },
                    success: function(data){
                      if(data == "success"){

                          $.ajax({

                    url: "{{url('/confirm/order/payment')}}",
                    type: "POST",
                    data: {
                        "fullname": ord_ary.fname+" "+ord_ary.lname,
                        "email": ord_ary.email,
                        "code": ord_ary.code,
                        "order_id": ord_ary.order_id,
                        "user_id": ord_ary.user_id,
                        "amount": ord_ary.amount,
                        "status": "<?php echo SUCCESSFUL ?>",
                        "reference": response.reference,
                        "payment_gateway_id": ord_ary.payment_gateway_id,
                        "_token":$('input[name=_token]').val()
                    },
                    success: function(data){
                        if(data.status == "success"){
                          window.location = "order/status/"+ ord_ary.ref_id +"";
                        } else {
                            window.location = "order/status/"+ ord_ary.ref_id +"";
                        }
                    },
                    });
                        }else{
                         $.ajax({

                    url: "{{url('/confirm/order/payment')}}",
                    type: "POST",
                    data: {
                        "fullname": ord_ary.fname+" "+ord_ary.lname,
                        "email": ord_ary.email,
                        "code": ord_ary.code,
                        "order_id": ord_ary.order_id,
                        "user_id": ord_ary.user_id,
                        "amount": ord_ary.amount,
                        "status": "<?php echo UNSUCCESSFUL ?>",
                        "reference": response.reference,
                        "payment_gateway_id": ord_ary.payment_gateway_id,
                        "_token":$('input[name=_token]').val(),
                    },
                    success: function(data){
                       window.location = "order/status/"+ ord_ary.ref_id +"";
                    },
                    });
                      }
                  }
                });

            },
            onClose: function(){
          }
            });
            handler.openIframe();
        }


        function payWithFlutter(){
        var flw_ref = "", chargeResponse = "", API_publicKey = ord_ary.public_key;

        getpaidSetup(
        {
            PBFPubKey: ord_ary.public_key,
            customer_email: ord_ary.email,
            //amount: 1,
            amount: ord_ary.amount,
            customer_phone: ord_ary.tel,
            currency: "NGN",
            payment_method: "both",
            txref: ord_ary.ref_id,
            meta: [{metaname:"flightID", metavalue: "AP1234"}],
            onclose:function(response) {},
            callback:function(response) {
                //console.log("This is the response returned after a charge", response);
                if(response.tx.chargeResponseCode =='00' || response.tx.chargeResponseCode == '0') {
                    $.ajax({
                        url: "{{url('/confirm/order/payment')}}",
                        type: "POST",
                        data: {
                            "fullname": ord_ary.fname+" "+ord_ary.lname,
                            "email": ord_ary.email,
                            "code": ord_ary.code,
                            "order_id": ord_ary.order_id,
                            "user_id": ord_ary.user_id,
                            "amount": ord_ary.amount,
                            "status": "<?php echo SUCCESSFUL ?>",
                            "reference": ord_ary.ref_id,
                            "payment_gateway_id": ord_ary.payment_gateway_id,
                            "_token":$('input[name=_token]').val()
                        },
                        success: function(data){
                            window.location = "order/status/"+ ord_ary.ref_id +"";
                        },
                    });
                } else {
                    $.ajax({
                        url: "{{url('/confirm/order/payment')}}",
                        type: "POST",
                        data: {
                            "fullname": ord_ary.fname+" "+ord_ary.lname,
                            "email": ord_ary.email,
                            "code": ord_ary.code,
                            "order_id": ord_ary.order_id,
                            "user_id": ord_ary.user_id,
                            "amount": ord_ary.amount,
                            "status": "<?php echo UNSUCCESSFUL ?>",
                            "reference": ord_ary.ref_id,
                            "payment_gateway_id": ord_ary.payment_gateway_id,
                            "_token":$('input[name=_token]').val(),
                        },
                        success: function(data){
                            window.location = "order/status/"+ ord_ary.ref_id +"";
                        },
                    });
                }
            }
        });
    }

    $('#order-form').submit(function(e){
		e.preventDefault();
        open_loader('#page');

		var form = $("#order-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("/user/order")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
                     ord_ary = data;
                    if(ord_ary.status == "success"){
                     if(ord_ary.payment_type == "paystack"){
                            payWithPaystack(); 
                        } else if(ord_ary.payment_type == "flutter"){
                            payWithFlutter(); 
                         } 
                    } else {
                      toastr.error(ord_ary.message, ord_ary.status);
                      close_loader('#page');
                    }

                },
			error: function(result){
				toastr.error('Check Your Network Connection !!!','Network Error');
                close_loader('#page');
			}
		});
		return false;
    });
</script>
@endsection
