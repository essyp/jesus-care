@extends( 'layouts.app' )

@section('title', $data->name)

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1 style="font-family: fantasy">{{$data->name}}</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('ministry')}}">Ministry</a></li>
            <li><a href="javascript:void(0);">{{$data->name}}</a></li>
        </ul>
    </div>
</div>

<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <div class="blog-list">
                    
                    <img src="{{asset('images/ministries/'.$data->image)}}" alt="img" style="max-height:500px">
                   
                    <div class="section-heading text-left">
                        <h3 class="semi-bold font-size-35" style="font-family: times new roman">{{$data->name}}</h3>
                        <div class="section-heading-line line-thin"></div>
                    </div>
                    <p>{!!$data->description!!}</p>
                </div>

                <a href="{{url('contact-us')}}" class="button-md button-primary-bordered mt-15">Contact Us</a>

                <h4 class="blog-widget-title" style="font-family: times new roman">Share Service</h4>
                    <div class="blog-post-follow mt-20">
                        <ul>
                            <li class="social-link"><a href="http://www.facebook.com/sharer/sharer.php?u={{url('ministry/'.$data->slug)}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-link"><a href="https://twitter.com/intent/tweet?url={{url('ministry/'.$data->slug)}}&amp;text={{$data->name}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-link"><a href="http://www.linkedin.com/shareArticle/?url={{url('ministry/'.$data->slug)}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li class="social-link"><a href="https://plus.google.com/share?url={{url('ministry/'.$data->slug)}}" rel="nofollow" onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                            <li class="social-link"><a href="http://pinterest.com/pin/create/button/?url={{url('ministry/'.$data->slug)}}" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fab fa-pinterest"></i></a></li>
                        </ul>
                    </div>


            </div>
        </div>
    </div>
</div>


@include('includes.donate')

@endsection

@section('script')

@endsection
