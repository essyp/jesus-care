@if(Auth::guard('user')->user())
    <script>window.location.href = "{{url('/')}}";</script>
@endif
@extends( 'layouts.app' )

@section('title','Account Activation')

@section('style')
@endsection

@section('content')
<div class="error-section-2 text-center">

        <div class="container">
            @if($id)
            <img src="{{asset('images/success.PNG')}}" alt="">
            <h1 style="font-size: 60px; color: green">Account Activated</h1>
            <p><strong>Your account with email registration <span style="color: green">{{$email}}</span> is now activated.</strong></p>
            <p><strong>You can now login to your account using the below button.</strong></p>
            <a href="{{url('login')}}" class="button-md button-primary-bordered mt-30">Login</a>
            <br><br><br><br>
            
            @else

            <h1>404</h1>
            <h2>Oops, This Page Could Not Be Found!</h2>
            <h3>We couldnt find the page you were looking for.</h3>
            <a href="{{url('/')}}" class="button-md button-primary-bordered mt-30">Back Home</a>

            @endif
        </div>

    </div>

@endsection

@section('script')
<script>
    $('#pass-form').submit(function(e){
		e.preventDefault();
        open_loader('#page');

		var form = $("#pass-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("reset-password")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
				if(data.status == "success"){
                    toastr.success(data.message, data.status);
                    setTimeout("window.location.href='{{url('login')}}';",2000);
					//window.setTimeout(function(){location.reload();},2000);
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
