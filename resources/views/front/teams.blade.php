@extends( 'layouts.app' )

@section('title','Our Team')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Leadership Team</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Page</a></li>
            <li><a href="javascript:void(0);">Leadership Team</a></li>
        </ul>
    </div>
</div>

<div class="section-block grey-bg">
    <div class="container">
        @if(count($teams) >= 1)
        <div class="row mt-60">
            @foreach ($teams as $tm)
            <div class="col-md-3 col-sm-6 col-12">
                <div class="team-box-2">
                    <a href="{{url('team/'.$tm->url)}}"><img src="{{('images/teams/'.$tm->image)}}" style="height: 300px; width: 100%"></a>
                    <div class="team-box-2-info">
                        <a href="{{url('team/'.$tm->url)}}"><h4>{{$tm->name}} </h4>
                            <h6>{{$tm->position}} </h6> </a>
                        <ul class="team-box-2-icon">
                            <li><a href="{{$tm->facebook}} " target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$tm->twitter}} " target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$tm->instagram}} " target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="{{$tm->linkedin}} " target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <p><strong>No Active Data...</strong></p>
        @endif
    </div>
</div>
@include('includes.donate')
@endsection

@section('script')
@endsection
