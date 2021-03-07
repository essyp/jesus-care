@extends( 'layouts.app' )

@section('title', $testimony->title)

@section('style')
@endsection

@section('content')
    <div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Testimony</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="javascript:void(0);">Page</a></li>
                <li><a href="javascript:void(0);">Testimony</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block grey-bg">
                        <div class="background-shape bs-right"></div>
                        <div class="container">
                           <div class="section-heading text-center">
                               <h4 class="semi-bold">{{$testimony->title}}</h4>
                            </div>
                            <div class="row mt-40">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <div class="testmonial-box-2">
                                        <i class="quote-icon fa fa-quote-left"></i>
                                        <p>{!!$testimony->testimony!!}</p>
                                        <div class="d-table">
                                            <img src="{{asset('images/testimonials/'.$testimony->image)}}" class="testmonial-img" alt="img">
                                            <div class="d-table-cell">
                                                <h4>{{$testimony->testifier}}</h4> <strong>{{$testimony->location}}</strong>
                                            </div>
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

