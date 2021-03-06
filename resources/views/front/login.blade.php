@if(Auth::guard('user')->user())
    <script>window.location.href = "{{url('/')}}";</script>
@endif
@extends( 'layouts.app' )

@section('title','Login')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Login</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Pages</a></li>
            <li><a href="javascript:void(0);">Login</a></li>
        </ul>
    </div>
</div>
<div class="section-block grey-bg">
    <div class="background-shape bs-right"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12"></div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="section-heading">
                    <h6 class="semi-bold">Login to your Account</h6>
                </div>
                <form id="log-form" class="primary-form-2 mt-15">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <input type="text" name="email" placeholder="Email Address*" required>
                        </div>
                        <div class="col-sm-12 col-12">
                            <input type="password" name="password" placeholder="Enter your password*" required>
                        </div>
                    </div>
                    <div class="row mt-15">
                        <div class="col-sm-8">
                            <p><a href="{{url('forgot-password')}}">Forgot Password</a></p>
                            <p>Dont Have Account? <a href="{{url('register')}}">Register Here</a></p>
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="button-md button-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-3 col-12"></div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $('#log-form').submit(function(e){
		e.preventDefault();
        open_loader('#page');

		var form = $("#log-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("login-user")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
				if(data.status == "success"){
                    toastr.success(data.message);
                    setTimeout("window.location.href='{{url('user/account')}}';");
					//window.setTimeout(function(){location.reload();},2000);
                    close_loader('#page');
                    } else{
                        toastr.error(data.message);
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
