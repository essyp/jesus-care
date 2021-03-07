@extends( 'layouts.app' )

@section('title','Order Status')

@section('style')
@endsection

@section('content')

    <div class="error-section-2 text-center">

        <div class="container">
            @if($status->status == SUCCESSFUL)
            <img src="{{asset('images/success.PNG')}}" alt="">
            <h1 style="font-size: 60px; color: green">Order Successful</h1>
            <p><strong>Your payment is successful!! <br> Your Transaction Reference is <span style="color: green">{{$status->transaction_id}}</span></strong></p>
            <p><strong>We are already processing your order and one of us will contact you shortly.</strong></p>
            <a href="{{url('user/orders')}}" class="button-md button-primary-bordered mt-30">View Transactions</a>
            <br><br><br><br>
            @elseif($status->status == UNSUCCESSFUL)

            <img src="{{asset('images/unsuccess.PNG')}}" alt="">
            <h1 style="font-size: 60px">Order Unsuccessful</h1>
            <p><strong>Your payment is unsuccessful!! <br> Your Transaction Reference is <span style="color: red">{{$status->transaction_id}}</span></strong></p>
            <p><strong></strong></p>
            <a href="{{url('user/orders')}}" class="button-md button-primary-bordered mt-30">Make Payment</a>

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
@endsection
