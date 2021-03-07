@extends( 'layouts.app' )

@section('title', $product->pname)

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>{{$product->pname}}</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('marketplace')}}">Products</a></li>
            <li><a href="javascript:void(0);">{{$product->pname}}</a></li>
        </ul>
    </div>
</div>

<div class="section-block">
<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="product-images">
                <div class="main-img-slider">
                    <figure>
                        <a href="javascript:void(0);" data-size="1400x1400">
                            <img src="{{asset('images/products/'.$product->image)}}" style="max-height: 500px; max-width: 500px"/>
                        </a>
                    </figure>

                </div>

            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
            <div class="single-product">
                <h2>{{$product->pname}}</h2>
                <div class="single-product-price">
                    <h4>{{$comm->currency}}{{number_format($product->price)}}</h4>
                </div>
                <p>{!!$product->short_descrpt!!}</p>
                <div class="quantity mt-30">
                    <!-- <button type="button" class="add-to-cart-button" data-toggle="modal" data-target="#order">Request Product</button> -->
                    @if(empty(Auth::guard('user')->user()->id))
                    <button type="button" class="add-to-cart-button" data-toggle="modal" data-target="#login">Add to cart</button>
                    @else
                    <a href="javascript:void(0);" class="add-to-cart-button addToCart" data-price="{{$product->price}}" data-productid="{{$product->id}}" data-userid="{{Auth::guard('user')->user()->id}}">Add to cart</a>
                    @endif
                </div>
                <div class="product-categories">
                    <div class="display-b">
                        <span>Category: </span>
                        <ul>
                            <li><a href="javascript:void(0);">{{$product->cat->name}}</a></li>
                        </ul>
                    </div>
                    <div class="display-b">
                        <span>Product ID: </span>
                        <ul> <li>{{$product->key}}</li></ul>
                    </div>
                </div>

                <div class="product-share mt-20">
                    <span>Share: </span>
                    <a href="http://www.facebook.com/sharer.php?u={{url('shop/'.$product->slug)}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"><i class="fab fa-facebook"></i></a>
                    <a href="http://twitter.com/share?text={{$product->pname}}&url={{url('shop/'.$product->slug)}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"><i class="fab fa-twitter"></i></a>
                    <a href="https://plus.google.com/share?url={{url('shop/'.$product->slug)}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"><i class="fab fa-google-plus"></i></a>
                    <a href="http://pinterest.com/pin/create/button/?url={{url('shop/'.$product->slug)}}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fab fa-pinterest"></i></a>
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url={{url('shop/'.$product->slug)}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="shop-tabs">
                <div class='tabs tabs_animate mt-70'>
                    <!-- <ul class="tab-menu left-holder">
                        <li><a href="#tab-1">Product Description</a></li>
                    </ul> -->
                    <div id='tab-1' class="clearfix product-tab-body">
                        <h3>Product Description</h3>
                        <p>{!!$product->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!-- Order modal -->
    <div id="order" class="modal fade" role="dialog" style="z-index:10000000 !important;">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <h4 class="modal-title">Request For This Product</h4>
          <p><strong>{{$product->pname}}</strong></p>
        <form id="order-form" class="primary-form-2 mt-15">
            {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <input type="text" name="name" placeholder="Your Name*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="text" name="email" placeholder="Email Address*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="text" name="tel" placeholder="Phone Number*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="text" name="address" placeholder="Contact Address*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <textarea name="note" placeholder="Write a comment*" required></textarea>
                        </div>

                    </div>
                    <div class="row mt-15">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6 text-right">
                            <input type="hidden" name="product_id" value="{{$product->product_id}}" required>
                            <button type="submit" class="button-md button-primary">Submit Request</button>
                        </div>
                    </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

@endsection





@section('script')
<script>
 $('#comment-form').submit(function(e){
		e.preventDefault();
        open_loader('#page');

		var form = $("#comment-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("/home/ajax/product/comment")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
				if(data.status == "success"){
					toastr.success(data.message, data.status);
					window.setTimeout(function(){location.reload();},2000);
                    close_loader('#page');
                    } else{
                        toastr.error(data.message, data.status);
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

    $('#order-form').submit(function(e){
        e.preventDefault();
        $('#order').modal('hide');
        open_loader('#page');

		var form = $("#order-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("/home/ajax/product/order")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
				if(data.status == "success"){

					toastr.success(data.message, data.status);
					window.setTimeout(function(){location.reload();},2000);
                    close_loader('#page');
                    } else{
                        toastr.error(data.message, data.status);
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


    $('#log-form').submit(function(e){
        e.preventDefault();
        open_loader('#page');

        var form = $("#log-form")[0];
        var _data = new FormData(form);
        $.ajax({
            url: '{{url("/user/login")}}',
            data: _data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType:false,
            type: 'POST',
            success: function(data){
                if(data.status == "success"){
                    $('#login').modal('hide');
                    toastr.success(data.message, data.status);
                    window.setTimeout(function(){location.reload();},2000);
                    close_loader('#page');
                    } else{
                        toastr.error(data.message, data.status);
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
