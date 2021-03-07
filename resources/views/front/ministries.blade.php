@extends( 'layouts.app' )

@section('title','Ministries')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Ministries</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Pages</a></li>
            <li><a href="javascript:void(0);">Ministries</a></li>
        </ul>
    </div>
</div>

<div class="section-block-bg" style="background-image: url('img/content/business/bg5.jpg');">
        <div class="container">
            <div class="cases-md">
                <div class="row mt-30">
                    @foreach ($data as $pr)
                    @if(!empty($pr->image))
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="service-box-2">
                            <div class="service-box-2-icon">
                                <a href="{{url('ministry/'.$pr->slug)}}"> <i class="fas fa-arrow-right"></i> </a>
                            </div>
                            <img src="{{asset('images/ministries/'.$pr->image)}}" style="height: 300px" alt="img">
                            <div class="service-box-2-overlay" style="background: rgba(0,0,0,0.6); width: 100%; height: 80px;">
                                <div class="service-box-2-text" >
                                    <h6><a href="{{url('ministry/'.$pr->slug)}}" style="font-size: 16px">{{$pr->name}}</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('includes.donate')
@endsection

@section('script')
@endsection
