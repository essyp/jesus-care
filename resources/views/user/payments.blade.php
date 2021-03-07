@extends( 'layouts.user' )

@section('title', 'Payment History')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/bg2.jpg')}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Payment History</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Page</a></li>
            <li><a href="javascript:void(0);">Payment History</a></li>
        </ul>
    </div>
</div>

<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-12">
                <h4>My Payment History</h4>
                <p>All my payments</p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>Date Created</th>
                        <th>Amount ({{$comm->currency}})</th>
                        <th>Payment Type</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $od)
                    <tr>
                        <td>{{$od->transaction_id}}</td>
                        <td>{{date("d F, Y",strtotime($od->created_at))}}</td>
                        <td>{{number_format($od->amount,2)}}</td>
                        <td>{{$od->gateway->name}}</td>
                        @if($od->status == SUCCESSFUL)
                        <td><span style="color: green">successful</span></td>
                        @elseif($od->status == UNSUCCESSFUL)
                        <td><span style="color: red">unsuccessful</span></td>
                        @endif
                    </tr>
                    @endforeach
                   </tbody>
                </table>
                {{$data->links('front.pagination')}}
                </div>
           @include('includes.user-side')
        </div>
    </div>
</div>

@endsection

@section('script')
@endsection
