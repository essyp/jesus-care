@extends( 'layouts.app' )

@section('title', $team->fname.' '.$team->lname)

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>{{$team->fname}} {{$team->lname}}</h1>
        {{--  <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('our-team')}}">Management Team</a></li>
            <li><a href="javascript:void(0);">{{$team->fname}} {{$team->lname}}</a></li>
        </ul>  --}}
    </div>
</div>

<div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-12">
                    <img src="{{asset('images/teams/'.$team->image)}}" class="rounded-border shadow-light">
                </div>
                <div class="col-md-7 col-sm-7 col-12">
                    <div class="pl-30-md">
                        <div class="portfolio-single">
                            <h3 class="portfolio-single-title mt-30-xs">{{$team->fname}} {{$team->lname}}</h3>
                            <h6 class="mt-30">{{$team->position}}</h6>
                            <p class="portfolio-single-text">{!!$team->description!!}</p>
                        </div>
                        <div class="product-share white-background px-0 mt-0">
                            <a href="{{$team->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="{{$team->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{$team->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="{{$team->linkedin}}" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  @include('include.quote')  --}}

@endsection

@section('script')
@endsection
