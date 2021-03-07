@extends( 'layouts.app' )

@section('title','Products')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Products</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Pages</a></li>
            <li><a href="javascript:void(0);">Products</a></li>
        </ul>
    </div>
</div>
<div class="section-block">
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-8 col-12">
            @if(count($data) >= 1)
        <div class="row">
       @foreach ($data as $pr)
        <div class="col-md-4 col-sm-6 col-12">
            <a href="{{url('shop/'.$pr->slug)}}"><div class="shop-1">
                <img src="{{asset('images/products/'.$pr->image)}}" style="height: 300px; max-width: 100%" />
               <div class="shop-classic-sale-img shop-classic-hot-img">
                    <h4>{{$pr->pname}}</h4>
                    <h4>{{$comm->currency}}{{number_format($pr->price)}}</h4>
                </div>
                <h6 style="font-size: 13px">{{$pr->pname}}</h6>
                <p><span></span> {{$comm->currency}}{{number_format($pr->price)}}</p>
                </div></a>
        </div>
        @endforeach
        </div>
        @else
            <p>No available data for this page!! <strong><a style="color: brown" href="{{url('/')}}">Return to Home</a></strong></p>
            @endif
        </div>

        @include('includes/product-side');

    </div>
    {{$data->links('front.pagination')}}
</div>
</div>

{{--  @include('include.quote')  --}}
@endsection

@section('script')
@endsection
