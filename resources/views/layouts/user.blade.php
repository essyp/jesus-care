@if(empty(Auth::guard('user')->user()))
    <script>setTimeout("window.location.href='{{url("/")}}';");</script>
@endif
<!DOCTYPE html><html lang="zxx">
<head>
    <title>{{$comm->shortname}} - @yield('title')</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('images/logo/'.$comm->favicon)}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/rev-settings.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/waitMe.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/styles-2.css')}}" id="main_styles">
    @yield('style')
</head>
<body id="page">
<div id="preloader">
        <div class="lds-ellipsis">
            <div></div><div></div><div></div><div></div></div></div>

    <header>
        <nav id="navigation4" class="container navigation">
            <div class="nav-header">
                <a class="nav-brand" href="{{url('/')}}">
                    <img src="{{asset('images/logo/'.$comm->logo)}}" style="max-height: 70px; max-width: 130px" class="main-logo" id="main_logo" alt="logo">
                </a>
                <div class="nav-toggle"></div>

            </div>
            <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="javascript:void(0);">About</a>
                        <ul class="nav-dropdown">
                            <li><a href="{{url('about-us')}}">Who We Are</a></li>
                            <li><a href="{{url('programme')}}">Ministry Programmes</a></li>
                            <li><a href="{{url('leadership-team')}}">Leadership Team</a></li>
                            <li><a href="{{url('testimonies')}}">Testimonies</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('ministry')}}">Ministries</a>
                        <ul class="nav-dropdown">
                            @foreach($ministry as $serv)
                           <li><a href="{{url('ministry/'.$serv->slug)}}">{{$serv->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{url('event')}}">Events</a></li>
                    <li><a href="{{url('blog')}}">Blog</a></li>
                    <li><a href="{{url('shop')}}">Ministry Shop</a></li>
                    <li><a href="{{url('contact-us')}}">Contact</a></li>

                    @if($totalcart > 0)
                    <li id="cart-refresh" class="hidden-md-down"><a href="{{url('shopping-cart')}}"><i class="fa fa-shopping-cart" style="font-size:15px;color:red"></i><span class='badge badge-warning'> {{$totalcart}} </span></a></li>
                    <li id="cart-refresh" class="hidden-lg-up"><a href="javascript:void(0);">Shopping Cart<span class='badge badge-warning'> {{$totalcart}} </span></a>
                        <ul class="nav-dropdown">
                            <li><a href="{{url('shopping-cart')}}">Shopping Cart</a></li>
                            <li><a href="{{url('checkout')}}">Checkout</a></li>
                        </ul>
                    </li>
                    @endif
                    
                    @if(!empty(Auth::guard('user')->user()))
                    <li style="padding-top: 17px;"><button style="background-color: #202CA6;" onclick="location.href='{{url('user/account')}}';" class="btn btn-success">Account</button></li>
                    @else
                    <li style="padding-top: 17px;"><button style="background-color: #202CA6;" onclick="location.href='{{url('login')}}';" class="btn btn-success">Login | Register</button></li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>


    @yield('content')




<footer>
        <div class="footer-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <a href="{{url('/')}}"><img src="{{asset('images/logo/'.$comm->logo)}}" style="max-height: 100px; max-width: 100px" id="footer_logo" alt="logo"></a>
                        <p class="mt-20">{!!$comm->meta_descrpt!!}</p>
                        <ul class="social-links-footer">
                            <li><a href="{{$comm->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="{{$comm->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$comm->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{$comm->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="{{$comm->youtube}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h2>Extra Links</h2>
                        <div class="row mt-25">
                        <div class="col-md-6 col-sm-6">
                                <ul class="footer-nav">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('about-us')}}">About Us</a></li>
                                    <li><a href="{{url('leadership-team')}}">Leadership Team</a></li>
                                    <li><a href="{{url('testimonies')}}">Testimonials</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <ul class="footer-nav">
                                    <li><a href="{{url('ministry')}}">Ministries</a></li>
                                    <li><a href="{{url('event')}}">Events</a></li>
                                    <li><a href="{{url('shop')}}">Ministry Shop</a></li>
                                    <li><a href="{{url('blog')}}">Blog</a></li>
                                    <li><a href="{{url('contact-us')}}">Contact us</a></li>
                                    @if(!empty(Auth::guard('user')->user()))
                                    <li><a href="{{url('logout')}}">Logout</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h2>Recent news</h2>
                        <ul class="footer-news mt-25">
                            @foreach($footerblog as $fb)
                            <li>
                                <a href="{{url('blog/'.$fb->slug)}}">{{$fb->title}}</a>
                                <strong><i class="fa fa-calendar"></i> {{date("d F, Y",strtotime($fb->created_at))}}</strong>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <h2>Subscribe</h2>
                        <form id="news-form" class="footer-subscribe-form mt-25">
                            {{ csrf_field() }}
                            <div class="d-table full-width">
                                <div class="d-table-cell">
                                    <input type="text" name="email" placeholder="Your Email address">
                                </div>
                                <div class="d-table-cell">
                                    <button type="submit"><i class="fas fa-envelope"></i></button>
                                </div>
                            </div>
                        </form>
                        <p class="mt-10">Get latest updates and offers.</p>
                    </div>
                </div>
                <div class="footer-1-bar">
                    <p>{{$comm->shortname}} © <?php echo date("Y"); ?>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>

    <script src="{{asset('home/js/jquery.min.js')}}"></script>
    <script src="{{asset('home/js/plugins.js')}}"></script>
    <script src="{{asset('home/js/navigation.js')}}"></script>
    <script src="{{asset('home/js/navigation.fixed.js')}}"></script>
    <script src="{{asset('home/js/map.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('home/js/rev-slider/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('home/js/main.js')}}"></script>
    <script src="{{asset('home/js/toastr.min.js')}}"></script>
    <script src="{{asset('home/js/waitMe.min.js')}}"></script>
    <script>
    function open_loader(container) {
        $(container).waitMe({
            effect : 'bounce',
            text : '',
            bg : 'rgba(255,255,255,0.7)',
            color : '#000',
            maxSize : '',
            waitTime : '-1',
            textPos : 'vertical',
            fontSize : '',
            source : '',
            onClose : function() {}
        });
    }

    function close_loader(container) {
        $(container).waitMe("hide");
    }
    </script>


    @yield('script')


    <script>
       $('#news-form').submit(function(e){
		e.preventDefault();
        open_loader('#page');

		var form = $("#news-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("/home/ajax/newsletter")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
				if(data.status == "success"){
					toastr.success(data.message, data.status);
					window.setTimeout(function(){location.reload();},3000);
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

    $('#quote-form').submit(function(e){
        e.preventDefault();
        $('#quote').modal('hide');
        open_loader('#page');

        var form = $("#quote-form")[0];
        var _data = new FormData(form);
        $.ajax({
            url: '{{url("/home/ajax/quote")}}',
            data: _data,
            enctype: 'multipart/form-data',
            processData: false,
            contentType:false,
            type: 'POST',
            success: function(data){
                if(data.status == "success"){
                    toastr.success(data.message, data.status);
                    $("#quote-form")[0].reset();
                    //window.setTimeout(function(){location.reload();},3000);
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


</body>
</html>
