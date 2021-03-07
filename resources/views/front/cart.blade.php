@extends( 'layouts.app' )

@section('title','Shopping Cart')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Shopping Cart</h1>
        {{--  <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('shop')}}">Shop</a></li>
            <li><a href="javascript:void(0);">Shopping Cart</a></li>
        </ul>  --}}
    </div>
</div>
    <div class="section-block grey-bg">
        <div class="container" id="refresh">
            @if(count($cart) >= 1)
            <div class="row">
                <div class="col-md-8 col-sm-10 col-12" id="1">
                    @foreach($cart as $ct)
                    <div class="shop-cart-box">
                        <div class="row no-gutters">
                            <div class="col-md-1 col-sm-1 col-12 pr-0">
                                <div class="button-close">
                                    <a href="javascript:void(0);" data-id="{{$ct->id}}" class="close-box removeFromCart">
                                        <i class="ti-close"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-12">
                                <div class="shop-cart-box-img">
                                    <img src="{{asset('images/products/'.$ct->product->image)}}" style="max-height: 100px; max-width: 100px" alt="img">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="shop-cart-box-info">
                                    <h4><a href="{{url('shop/'.$ct->slug)}}">{{$ct->product->pname}}</a></h4>
                                    <span>{{$comm->currency}}{{number_format($ct->price)}}</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="shop-cart-box-quantity">
                                    <span><a href="javascript:void(0);" class="btn btn-danger decreasecart" data-id="{{$ct->id}}">-</a></span>
                                    <input type="text" value="{{$ct->quantity}}" style="width: 40px; height:30px">
                                    <span><a href="javascript:void(0);" class="btn btn-success increasecart" data-id="{{$ct->id}}">+</a></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <div class="shop-cart-box-price">
                                    <h5>{{$comm->currency}}{{number_format($ct->total)}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-4 col-sm-10 col-12">
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
                        <a href="{{url('checkout')}}" class="button-md button-primary">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
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
@endsection
