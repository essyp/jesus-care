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



    <!-- Register modal -->
    <div id="account" class="modal fade" role="dialog" style="z-index:10000000 !important;">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <h4 class="modal-title">Create Your Account</h4>
        <form id="register-form" class="primary-form-2 mt-15">
            {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <input type="text" name="fname" placeholder="First Name*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="text" name="lname" placeholder="Last Name*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="text" name="email" placeholder="Email Address*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="text" name="tel" placeholder="Phone Number*" required>
                        </div>
                        <div class="col-sm-6 col-12">
                            <input type="password" name="password" id="pass1" placeholder="Password*" required>
                        </div>
                        <div class="col-sm-6 col-12">
                            <input type="password" name="repassword" id="pass2" onkeyup="checkPass(); return false;" placeholder="Confirm Password*" required>
                            <span id="confirmMessage"></span>
                        </div>

                    </div>
                    <div class="row mt-15">
                        <div class="col-sm-6">
<!--                            <div class="checkbox">
                                <input type="checkbox" checked id="checkbox_3">
                                <label for="checkbox_3">I’m available for commissions and collaborations, and i’m excited to hear from you about new projects.</label>
                            </div>-->
                        </div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="button-md button-primary">Create Account</button>
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



<!-- Login modal -->
    <div id="login" class="modal fade" role="dialog" style="z-index:10000000 !important;">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
          <h4 class="modal-title">Login to continue</h4>
        <form id="login-form" class="primary-form-2 mt-15">
            {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <input type="email" name="email" placeholder="Email Address*" required />
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="password" name="password" placeholder="Password*" required />
                        </div>

                    </div>
                    <div class="row mt-15">
                        <div class="col-sm-6"></div>
                        <div class="col-sm-6 text-right">
                            <button type="submit" class="button-md button-primary">Login</button>
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

    <script>
        $('#contact-form').submit(function(e){
         e.preventDefault();
         //$('#quote').modal('hide');
         open_loader('#page');

         var form = $("#contact-form")[0];
         var _data = new FormData(form);
         $.ajax({
             url: '{{url("/home/ajax/contact")}}',
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



     $('#login-form').submit(function(e){
         e.preventDefault();
         open_loader('#page');

         var form = $("#login-form")[0];
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

     $('#register-form').submit(function(e){
         e.preventDefault();
         open_loader('#page');

         var form = $("#register-form")[0];
         var _data = new FormData(form);
         $.ajax({
             url: '{{url("/user/register")}}',
             data: _data,
             enctype: 'multipart/form-data',
             processData: false,
             contentType:false,
             type: 'POST',
             success: function(data){
                 if(data.status == "success"){
                     $('#account').modal('hide');
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

         function checkPass(){
             //Store the password field objects into variables ...
             var pass1 = document.getElementById('pass1');
             var pass2 = document.getElementById('pass2');
             //Store the Confimation Message Object ...
             var message = document.getElementById('confirmMessage');
             //Set the colors we will be using ...
             var goodColor = "#66cc66";
             var badColor = "#ff6666";
             //Compare the values in the password field
             //and the confirmation field
         if(pass1.value == pass2.value){
             //The passwords match.
             //Set the color to the good color and inform
             //the user that they have entered the correct password
             pass2.style.backgroundColor = goodColor;
             message.style.color = goodColor;
             message.innerHTML = "Passwords Match!"
         }else{
             //The passwords do not match.
             //Set the color to the bad color and
             //notify the user.
             pass2.style.backgroundColor = badColor;
             message.style.color = badColor;
             message.innerHTML = "Passwords Do Not Match!"
         }
     }



     $(document).ready(function () {
         $("a.addToCart").on("click", function () {
           open_loader('#page');

           $.ajax({
               url: "{{url('/add/cart')}}",
               type: "POST",
               data: {
                       "user_id": $(this).attr("data-userid"),
                       "product_id": $(this).attr("data-productid"),
                       "price": $(this).attr("data-price"),
                       "_token":$('input[name=_token]').val()
                   },
                   success: function(data){
                       if(data.status == "success"){
                           toastr.success(data.message, data.status);
                           $('#cart-refresh').load(document.URL + ' #cart-refresh>*')
                           close_loader('#page');
                       } else {
                           toastr.error(data.message, data.status);
                           close_loader('#page');
                       }
                   },
           });
       });

       $("a.increasecart").on("click", function () {
           open_loader('#page');

           $.ajax({
               url: "{{url('/increase/cart')}}",
               type: "POST",
               data: {
                       "id": $(this).attr("data-id"),
                       "_token":$('input[name=_token]').val()
                   },
                   success: function(data){
                       if(data.status == "success"){
                           toastr.success(data.message, data.status);
                           //$('#refresh').load(location.href+(' #refresh'));
                             window.setTimeout(function(){location.reload();},1000);
                           close_loader('#page');
                       } else {
                           toastr.error(data.message, data.status);
                           close_loader('#page');
                       }
                   },
           });
       });
       $("a.decreasecart").on("click", function () {
           open_loader('#page');

           $.ajax({
               url: "{{url('/decrease/cart')}}",
               type: "POST",
               data: {
                       "id": $(this).attr("data-id"),
                       "_token":$('input[name=_token]').val()
                   },
                   success: function(data){
                       if(data.status == "success"){
                           toastr.success(data.message, data.status);
                           //$('#refresh').load(location.href+(' #refresh'));
                            window.setTimeout(function(){location.reload();},1000);
                           close_loader('#page');
                       } else {
                           toastr.error(data.message, data.status);
                           close_loader('#page');
                       }
                   },
           });
       });

       $("a.removeFromCart").on("click", function () {
         open_loader('#page');

         $.ajax({
             url: "{{url('/remove/cart')}}",
             type: "POST",
             data: {
                     "id": $(this).attr("data-id"),
                     "_token":$('input[name=_token]').val()
                 },
                 success: function(data){
                     if(data.status == "success"){
                         toastr.success(data.message, data.status);
                         $('#cart-refresh').load(document.URL + ' #cart-refresh>*')
                         close_loader('#page');
                     } else {
                         toastr.error(data.message, data.status);
                         close_loader('#page');
                     }
                 },
         });
     });

     $("a.emptyCart").on("click", function () {
         open_loader('#page');

         $.ajax({
             url: "{{url('/empty/cart')}}",
             type: "POST",
             data: {
                     "id": $(this).attr("data-id"),
                     "_token":$('input[name=_token]').val()
                 },
                 success: function(data){
                     if(data.status == "success"){
                         toastr.success(data.message, data.status);
                         window.setTimeout(function(){location.reload();},1000);
                         close_loader('#page');
                     } else {
                         toastr.error(data.message, data.status);
                         close_loader('#page');
                     }
                 },
         });
     });

    });

     </script>

    @yield('script')


</body>
</html>
