@extends( 'layouts.app' )

@section('title','Events')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Events</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Events</a></li>
        </ul>
    </div>
</div>

<div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-12">
                    @foreach ($data as $aw)
                    <div class="testmonial-box">
                        <div class="testmonial-box-content">
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-12">
                                    <img src="{{asset('images/events/'.$aw->image)}}">
                                </div>
                                <div class="col-md-7 col-sm-12 col-12">
                                    <h3 style="font-size: 22px;">{{$aw->title}}</h3><strong>{{date("d M, Y",strtotime($aw->start_date))}} - <span>{{date("d M, Y",strtotime($aw->end_date))}}</span></strong>
                                    <p>{!!substr($aw->description,0,200)!!}...</p><br>
                                    <a href="{{url('event/'.$aw->slug)}}" class="button-simple-primary mt-20">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{$data->links('front.pagination')}}
                </div>
            
                <div class="col-md-3 col-sm-12 col-12">
                    <div class="blog-post-right">
                        <h4 class="blog-widget-title" style="font-size: 25px; font-family: fantasy">Parish Desk</h4>
                        <div class="row mt-40"> 
                            <div class="col-md-12 col-sm-12 col-12"> 
                                <div class="testmonial-box-2"> <i class="quote-icon fa fa-quote-left"></i> 
                                    <p>{!!$message->message!!}</p>
                                    <div class="d-table"> 
                                        <!-- <img src="img/content/testmonials/t-1.jpg" class="testmonial-img" alt="img">  -->
                                        <div class="d-table-cell"> 
                                            <h4>{{$message->message_by}}</h4> <strong>{{$message->position}}</strong> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4 class="blog-widget-title">Ministries</h4>
                        <div class="blog-post-categories mt-20">
                            <ul>
                                @foreach ($ministry as $serv)
                                <li><a href="{{url('ministry/'.$serv->slug)}}">{{$serv->name}}<span></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <h4 class="blog-widget-title">Featured Blog</h4>
                        <div class="top-news mt-20">
                            @foreach ($blogfeatured as $blog)
                            <div class="top-news-info">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-12 pr-0">
                                        <img src="{{asset('images/blog/'.$blog->image)}}" alt="img">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h3><a href="{{url('blog/'.$blog->slug)}}">{{$blog->title}}</a></h3>
                                        <h6>{{date("d F, Y",strtotime($blog->created_at))}}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach

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
