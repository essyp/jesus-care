@extends( 'layouts.app' )

@section('title','Client Testimonials')

@section('style')
@endsection

@section('content')
    <div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
        <div class="container text-center">
            <h1>Testimonies</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="javascript:void(0);">Page</a></li>
                <li><a href="javascript:void(0);">Testimonies</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block grey-bg">
                        <div class="background-shape bs-right"></div>
                        <div class="container">
                            @if(count($testimony) >= 1)
                            <!-- <div class="section-heading text-center">
                                <small class="primary-color"></small>
                                <h4 class="semi-bold">People's Testimonies</h4>
                                <div class="section-heading-line line-thin"></div>
                            </div> -->
                            <div class="row mt-40">
                                @foreach($testimony as $ts)
                                <div class="col-md-4 col-sm-6 col-12">
                                    <div class="testmonial-box-2">
                                        <i class="quote-icon fa fa-quote-left"></i>
                                        <p>{!!substr($ts->testimony,0,220)!!}... <br><a href="{{url('testimony/'.$ts->slug)}}" class="button-simple-primary mt-20">Read More <i class="fas fa-arrow-right"></i></a></p>
                                        <div class="d-table">
                                            <img src="{{asset('images/testimonials/'.$ts->image)}}" class="testmonial-img" alt="img">
                                            <div class="d-table-cell">
                                                <h4>{{$ts->testifier}}</h4> <strong>{{$ts->location}}</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            {{$testimony->links('front.pagination')}}
                            @else
                            <p>No available data for this page!! <strong><a style="color: brown" href="{{url('/')}}">Return to Home</a></strong></p>
                            @endif
                        </div>
                    </div>

                    @include('includes.donate')



                    <!-- Button edit modal -->
<div  id="viewModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Full Testimony</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row mt-40">
                    <div class="col-md-12 col-sm-12 col-12">
                        <div class="testmonial-box-2">
                            <i class="quote-icon fa fa-quote-left"></i>
                            <p id="testimony"></p>
                            <div class="d-table">
                                <img id="image" class="testmonial-img" alt="img">
                                <div class="d-table-cell">
                                    <h4 id="testifier"></h4> <strong id="location"></strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

                    @endsection

@section('script')
<script>
   function viewTestimony(event){
        $('#testimony').text(event.testimony)
        $('#testifier').text(event.testifier)
        $('#location').text(event.location)
        $("#image").attr('src', "{{asset('images/testimonials')}}/"+event.image)
        $('#viewModal').modal('show')
    }
</script>
@endsection

