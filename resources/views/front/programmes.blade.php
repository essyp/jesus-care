@extends( 'layouts.app' )

@section('title','Programmes')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Our Programmes</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Programmes</a></li>
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
                                <div class="col-md-12 col-sm-12 col-12">
                                    <h3 style="font-size: 22px;">{{$aw->title}}</h3>
                                    <strong><span style="color: black;">Week Day: </span><span>{{$aw->week_day}}</span></strong><br>
                                    <strong><span style="color: black;">Time: </span><span>{{$aw->start_time}}</span> - <span>{{$aw->end_time}}</span></strong><br>
                                    <strong><span style="color: black;">Venue: </span><span>{{$aw->venue}}</span></strong>
                                    <p>{!!$aw->description!!}</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
