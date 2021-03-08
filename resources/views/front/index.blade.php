@extends( 'layouts.home' )

@section('title','Home')

@section('style')
@endsection

@section('content')
<div class="rev_slider_wrapper bg-arrows" style="border-bottom: 50px; border-bottom-style: solid; border-bottom-color: #202CA6;">
        <div id="rev_slider" class="rev_slider fullscreenbanner">
            <ul>
                @foreach($banner as $sl)
                <li>
                    <img src="{{asset('images/banners/'.$sl->image)}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
                    <div style="margin-bottom: 20px" class="slide-title tp-caption tp-resizeme text-center-sm" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20', '-150', '-350']" data-fontsize="['30','40', '40', '30']" data-fontweight="400" data-lineheight="['80','50', '50', '135']" data-width="['600','500','650']" data-height="none" data-color="#fff" data-whitespace="normal" data-start="500" data-responsive_offset="on">
                        <strong>{!!$sl->title!!}</strong>
                    </div>
                    <div style="margin-bottom: 60px;" class="slide-subtitle tp-caption tp-resizeme text-center-sm" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['90','90', '15', '15']" data-fontsize="['18', '18', '18', '18']" data-fontweight="300" data-lineheight="['30']" data-width="['600','500','650']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1200;e:Power1.easeInOut;" data-transform_out="opacity:0;s:1000;s:1000;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-color="#fff" data-splitin="none" data-splitout="none">
                        {!!$sl->description!!}
                    </div>
                    <a href="{{$sl->link}}"><div class="tp-caption rev-btn tp-resizeme slider-btn button-primary" id="slide-1081-layer-13" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['160','160','160','30']" data-fontsize="['15','15','15','15']" data-fontweight="600" data-lineheight="['50','50','50','50']" data-width="['200','200','200','200']" data-height="none" data-whitespace="nowrap" data-start="1500" data-type="button" data-actions='[{"event":"click","action":"scrollbelow","offset":"-70px","delay":"","speed":"2500","ease":"Power1.easeInOut"}]' data-responsive_offset="on" data-splitin="none" data-splitout="none" data-frames='[{"delay":900,"speed":1000,"frame":"0","from":"y:50px;opacity:0;fb:10px;fbr:100;","to":"o:1;fb:0;fbr:100;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;fbr:100;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"200","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;fbr:110%;","style":"c:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="">
                        {{$sl->button_name}}
                    </div></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>


<div class="section-block grey-bg background-shape-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-12">
                    <div class="section-heading">
                        <small class="uppercase">Who we are</small>
                        <h4 class="semi-bold">We're {{$comm->shortname}}</h4>
                    </div>
                    <div class="text-content mt-15">
                        <p>{!!$comm->shortdescrpt!!}</p>
                    </div>
                    
                    <a href="{{url('about')}}" class="button-md button-primary mt-30">Read More</a>
                </div>
                <div class="col-md-6 col-sm-6 col-12 offset-md-1">
                    <img src="{{asset('images/logo/'.$comm->about)}}" class="position-relative extra-rounded-border shadow-primary z-index-9 mt-30-xs" alt="img">
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
                            <p>{{$comm->vision}}</p>
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
                            <p>{{$comm->mission}}</p>
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
                            <p>{{$comm->value}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><br>

    @if(count($ministry) >= 1)
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold font-size-35" style="color: #202CA6; font-family: fantasy">Ministry</h3>
                <div class="section-heading-line line-thin"></div>
            </div>
            <div class="cases-md">
                <div class="row mt-30">
                    @foreach ($ministry as $pr)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="service-box-2">
                            <div class="service-box-2-icon">
                                <a href="{{url('ministry/'.$pr->slug)}}"> <i class="fas fa-arrow-right"></i> </a>
                            </div>
                            <img src="{{asset('images/ministries/'.$pr->image)}}" style="height: 300px" alt="img">
                            <div class="service-box-2-overlay" style="background: rgba(0,0,0,0.6); width: 100%; height: 80px;">
                                <div class="service-box-2-text" >
                                    <h6><a href="{{url('ministry/'.$pr->url)}}" style="font-size: 16px">{{$pr->name}}</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{url('ministry')}}" class="button-simple-primary mt-20">View All Ministry <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    @endif


    @if(count($events) >= 1)
    <div class="section-block">
        <div class="container">
        <div class="section-heading text-center">
                <h3 class="semi-bold font-size-35" style="color: #202CA6; font-family: fantasy">Upcoming Events</h3>
                <div class="section-heading-line line-thin"></div>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12 col-12">
                    @foreach ($events as $aw)
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

                       {{--- <div class="blog-post-categories mt-20">
                            <ul>
                                @foreach ($services as $serv)
                                <li><a href="{{url('service/'.$serv->url)}}">{{$serv->title}}<span></span></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <h4 class="blog-widget-title">Top News</h4>
                        <div class="top-news mt-20">
                            @foreach ($featuredblog as $blog)
                            <div class="top-news-info">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-12 pr-0">
                                        <img src="{{asset('images/blog/'.$blog->image)}}" alt="img">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h3><a href="{{url('blog/'.$blog->url)}}">{{$blog->title}}</a></h3>
                                        <h6>{{date("d F, Y",strtotime($blog->created_at))}}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div> ---}}

                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif




 {{-- <div class="section-block-grey background-center jarallax" data-jarallax data-speed="0.6" style="background-image: url('{{asset('images/test-bg.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12 offset-md-6">
                <div class="owl-carousel owl-theme testmonials-carousel-2 shadow-light mt-40">
                    @foreach ($testimony as $test)
                    <div class="testmonial-item">
                        <p>{!!$test->testimony!!}</p>
                        <h4>{{$test->testifier}} <span> / {{$test->location}}</span></h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> --}}


 <div class="container">
        <div class="section-heading text-center">
            <h3 class="semi-bold" style="color: #202CA6; font-family: fantasy">Featured Testimonies</h3>
            <div class="section-heading-line"></div>
            <p>What God cannot do does not exist. See evidence of God's goodness and faithfulness among His people.</p>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme testmonials-carousel">
                @foreach ($testimony as $test)
                <div class="testmonial-box">
                    <div class="testmonial-box-icon">
                        <img src="{{asset('images/testimonials/'.$test->image)}}">
                    </div>
                    <div class="testmonial-box-content">
                        <h3>{{$test->name}}</h3><strong>{{$test->location}}</strong>
                        <p>{!!$test->testimony!!}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>  

    <div class="section-block grey-bg jarallax" data-jarallax data-speed="0.9" style="background-image: url('img/content/business/bg-map.png')">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="section-heading">
                        <h3 class="semi-bold">Contact Us</h3>
                        <p>You acn easily reach us with the details below.</p>
                    </div>
                    <div>
                        <div class="contact-icon-box">
                            <i class="icon-phone-book"></i>
                            <h4>Direct line numbers</h4>
                            <h5>{{$comm->tel}} / {{$comm->tel2}}</h5>
                        </div>
                        <div class="contact-icon-box">
                            <i class="icon-opened-email-outlined-interface-symbol"></i>
                            <h4>Our Email</h4>
                            <h5>{{$comm->email}} / {{$comm->email2}}</h5>
                        </div>
                        <div class="contact-icon-box">
                            <i class="icon-location"></i>
                            <h4>Ministry Address</h4>
                            <h5>{{$comm->address}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-12">
                    <div class="pl-45-md">
                        <div class="callback-block">
                            <h4 class="bold text-center">Request a Call Back</h4>
                            <div class="section-heading-line line-thin"></div>
                            <div class="text-content-big text-center mt-20">
                                <p>Please complete the form</p>
                            </div>
                            <form id="contact-form" class="primary-form mt-30">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12">
                                        <input type="text" name="name" placeholder="Name*" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input type="text" name="email" placeholder="Email Address*" required>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-12">
                                        <input type="text" name="phone" placeholder="Phone Number*" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea placeholder="Message*" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="text-center mt-15">
                                    <button type="submit" class="button-md button-primary text-uppercase ml-0">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(count($blog) >= 1)
    <div class="section-block">
        <div class="container">
            <div class="section-heading text-center">
                <h3 class="semi-bold" style="color: #202CA6; font-family: fantasy">Latest Blog Post</h3>
                <div class="section-heading-line line-thin dark-bg"></div>
                <p>See our latest blog post</p>
            </div>
            <div class="row mt-40">
                @foreach ($blog as $blog)
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="blog-grid">
                        <img src="{{asset('images/blog/'.$blog->image)}}" style="height: 250px; max-width: 500px">
                        <div class="blog-team-box">
                            <h6>{{date("M d, Y",strtotime($blog->created_at))}}</h6>
                        </div>
                        <h4><a href="{{url('news/'.$blog->url)}}">{!!$blog->title!!}</a></h4>
                        <p>{!!substr($blog->description,0,300)!!}</p>
                        <a href="{{url('blog/'.$blog->slug)}}" class="button-simple-primary mt-20">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    @endif

@endsection

@section('script')

<script>
$('#contact-form').submit(function(e){
		e.preventDefault();
        open_loader('#page');

		var form = $("#contact-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("/home/ajax/contact")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
				if(data.status == "success"){
					toastr.success(data.message, data.status);
					window.setTimeout(function(){location.reload();},3000);
                    close_loader('#page');
                    } else{
                        toastr.error(data.message, data.status);
                        close_loader('#page');
                    }
			},
			error: function(result){
				toastr.error('Check Your Network Connection !!!','Network Error');
                close_loader('#page');
			}
		});
		return false;
    });
</script>
@endsection
