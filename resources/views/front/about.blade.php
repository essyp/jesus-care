@extends( 'layouts.app' )

@section('title','About Us')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>About Us</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Pages</a></li>
            <li><a href="javascript:void(0);">About Us</a></li>
        </ul>
    </div>
</div>
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-12">
                <img src="{{asset('images/logo/'.$com->about)}}" class="rounded-border shadow-primary">
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pl-30-md">
                    <div class="section-heading text-left mt-5">
                        <h3 class="semi-bold font-size-32" style="font-family: times new roman">Who We Are <span class="primary-color"></span></h3>
                        <div class="section-heading-line line-thin"></div>
                        <div class="text-content">
                            <p>{!!$com->shortdescrpt!!} <br> {!!$com->fulldescrpt!!}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="features-box">
                    <div class="features-box-icon">
                        <i class="icon-vision"></i>
                    </div>
                    <div class="features-box-content">
                        <h3>Our Vision</h3>
                        <p>{!!$com->vision!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="features-box">
                    <div class="features-box-icon">
                        <i class="icon-mission"></i>
                    </div>
                    <div class="features-box-content">
                        <h3>Mission Statement</h3>
                        <p>{!!$com->mission!!}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                <div class="features-box">
                    <div class="features-box-icon">
                        <i class="icon-chess"></i>
                    </div>
                    <div class="features-box-content">
                        <h3>Our Core Values</h3>
                        <p>{!!$com->value!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.donate')

@endsection

@section('script')
@endsection
