@extends( 'layouts.app' )

@section('title','Terms and Conditions')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Terms and Conditions</h1>
        {{--  <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Pages</a></li>
            <li><a href="javascript:void(0);">Terms and Conditions</a></li>
        </ul>  --}}
    </div>
</div>
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                @if(!empty($comm->terms))
                <div class="pl-30-md">
                    <div class="section-heading text-left mt-5">
                        <h3 class="semi-bold font-size-32">Our Terms and Conditions <span class="primary-color"></span></h3>
                        <div class="section-heading-line line-thin"></div>
                        <div class="text-content">
                            <p>{!!$comm->terms!!}</p>

                        </div>
                    </div>
                </div>
                @else
                <p>No available data for this page!! <strong><a style="color: brown" href="{{url('/')}}">Return to Home</a></strong></p>
                @endif
            </div>
        </div>

    </div>
</div>


{{--  @include('include.quote')  --}}

@endsection

@section('script')
@endsection
