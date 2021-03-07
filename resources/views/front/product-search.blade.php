@extends( 'layouts.app' )

@section('title', $q)

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>{{$q}}</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('marketplace')}}">Shop</a></li>
            <li><a href="javascript:void(0);">{{$q}}</a></li>
        </ul>
    </div>
</div>
<div class="section-block">
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-8 col-12">
        <div class="row">
       @foreach ($data as $pr)
        <div class="col-md-4 col-sm-6 col-12">
            <a href="{{url('shop/'.$pr->slug)}}"><div class="shop-1">
                <img src="{{asset('images/products/'.$pr->image)}}" style="height: 300px; max-width: 100%" />
               <!--<div class="shop-classic-sale-img shop-classic-hot-img">
                    <h4>-10%</h4>
                </div>-->
                <h6>{{$pr->pname}}</h6>
                <p><span></span> {{$comm->currency}}{{number_format($pr->price)}}</p>
                </div></a>
        </div>
        @endforeach
        </div>
        </div>

        @include('includes/product-side')

    </div>
    {{$data->links('front.pagination')}}
</div>
</div>

@endsection

@section('script')
@endsection
