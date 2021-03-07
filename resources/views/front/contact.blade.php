@extends( 'layouts.app' )

@section('title','Contact Us')

@section('style')
@endsection

@section('content')
<div style="background-image: url('{{asset('images/logo/'.$comm->background_image)}}');" class="breadcrumb-section jarallax pixels-bg" data-jarallax data-speed="0.6">
    <div class="container text-center">
        <h1>Contact Us</h1>
        <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="javascript:void(0);">Pages</a></li>
            <li><a href="javascript:void(0);">Contact Us</a></li>
        </ul>
    </div>
</div>
<div class="section-block grey-bg">
    <div class="background-shape bs-right"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-12">
                <div class="section-heading">
                    <h6 class="semi-bold">Visit Our Parish Office</h6>
                    <ul class="grey-list mt-15">
                    @if($com->address)<li><i class="fa fa-map-marker-alt"></i> {{$com->address}}</li>@endif
                        @if($com->address2)<li><i class="fa fa-map-marker-alt"></i> {{$com->address2}}</li>@endif
                    </ul>
                    <div class="mt-40">
                        <h6 class="semi-bold">Contact us</h6>
                        <ul class="grey-list mt-15">
                            <li><i class="fa fa-phone"></i> {{$com->tel}}, {{$com->tel2}}</li>
                            <li><i class="fa fa-envelope-open"></i> {{$com->email}}</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-12">
                <div class="section-heading">
                    <h6 class="semi-bold">Write us a message</h6>
                </div>
                <form id="submit-form" class="primary-form-2 mt-15">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-12 col-12">
                            <input type="text" name="name" placeholder="Your Name*" required>
                        </div>
                        <div class="col-sm-6 col-12">
                            <input type="text" name="email" placeholder="Email Address*" required>
                        </div>
                        <div class="col-sm-6 col-12">
                            <input type="text" name="tel" placeholder="Phone Number*" required>
                        </div>
                        <div class="col-12">
                            <textarea name="message" placeholder="Your Message*" required></textarea>
                        </div>
                    </div>
                    <div class="row mt-15">
                        <div class="col-sm-8">
                            {{--  <div class="checkbox">
                                <input type="checkbox" checked id="checkbox_3">
                                <label for="checkbox_3">I’m available for commissions and collaborations, and i’m excited to hear from you about new projects.</label>
                            </div>  --}}
                        </div>
                        <div class="col-sm-4 text-right">
                            <button type="submit" class="button-md button-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.9812722600645!2d3.319457414029889!3d6.52404819528106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e8a73bef5df%3A0xe93f8cc847878d68!2sSt.%20Mary&#39;s%20Catholic%20Church%2C%20Isolo!5e0!3m2!1sen!2sng!4v1615029680953!5m2!1sen!2sng" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

 {{-- @include('includes.donate') --}}
@endsection

@section('script')

<script>
        $('#submit-form').submit(function(e){
         e.preventDefault();
         //$('#quote').modal('hide');
         open_loader('#page');

         const form = $("#submit-form")[0];
         const _data = new FormData(form);
         $.ajax({
             url: '{{url("send-enquiry")}}',
             data: _data,
             enctype: 'multipart/form-data',
             processData: false,
             contentType:false,
             type: 'POST',
             success: function(data){
                 if(data.status == "success"){
                     toastr.success(data.message, data.status);
                     $("#submit-form")[0].reset();
                    //  window.setTimeout(function(){location.reload();},2000);
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
