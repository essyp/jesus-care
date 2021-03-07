<div class="action-box action-box-lg jarallax primary-overlay-80 center-holder-xs" data-jarallax data-speed="0.6" style="background-image: url('{{asset('images/bg4.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-12">
                    <h3 class="white-color bold">Give for the expansion of the kingdom</h3>
                    <p class="white-color">God loves a cheerful giver</p>
                </div>
                <div class="col-md-2 col-sm-2 col-12 text-right center-holder-xs mt-10">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#donate" class="button-md button-primary">Make Donation</a>
                </div>
            </div>
        </div>
    </div>







<!-- Donate modal -->
<div id="donate" class="modal fade" role="dialog" style="z-index:10000000 !important;">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
        <div class="modal-body">
            <h4 class="modal-title">Make Donation</h4>
            <form id="donate-form" class="primary-form-2 mt-15">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-12 col-12">
                        <label>Your Name</label>
                        <input type="text" name="name" placeholder="Your Name*" required>
                    </div>
                    <div class="col-sm-12 col-12">
                        <label>Contact Email Address</label>
                        <input type="text" name="email" placeholder="Email Address*" required>
                    </div>
                    <div class="col-sm-12 col-12">
                        <label>Contact Phone Number</label>
                        <input type="text" name="tel" placeholder="Phone Number*" required>
                    </div>
                    
                    <div class="col-sm-12 col-12">
                        <label>Amount</label>
                        <input type="number" name="amount" placeholder="eg 1000, 5000" required>
                    </div>
                    <div class="col-sm-12 col-12">
                        <label>Your Prayer Point</label>
                        <textarea name="comment" placeholder="Make your comment*"></textarea>
                    </div>

                    <h4>Payment Option</h4><br><br>
                    <div class="payment-option">
                        <div class="row">
                            @foreach($payment_gateway as $gate)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <span><input type="radio" id="{{$gate->id}}" value="{{$gate->id}}" name="payment_type" checked/>  {{$gate->name}}</span>
                                    <p>(Visa,Verve, Mastercard, etc)<br> <img src="{{asset('images/payments/'.$gate->logo)}}" style="max-width: 100px; max-height: 40px;"/></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-15">
                    <div class="col-sm-6">
                        {{--  <div class="checkbox">
                            <input type="checkbox" checked id="checkbox_3">
                            <label for="checkbox_3">I’m available for commissions and collaborations, and i’m excited to hear from you about new projects.</label>
                        </div>  --}}
                    </div>
                    <div class="col-sm-6 text-right">
                        <button type="submit" class="button-md button-primary">Make Donation</button>
                    </div>
                </div>
            </form>
        </div>
      {{--  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>  --}}
    </div>

  </div>
</div>




<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<script src="https://js.paystack.co/v1/inline.js"></script>
<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>

<script>
var ord_ary = [];
function payWithPaystack(){
    let amount = ord_ary.amount;
    //let amount = 1;
       var mystring = amount+'00';
     var handler = PaystackPop.setup({
            key: ord_ary.public_key, //replace this with your key
            email: ord_ary.email,
            amount: mystring,
            ref: ord_ary.ref_id, // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
            metadata: {
                custom_fields: [
                    {
                        display_name: "Full Name",
                        variable_name: "full_name",
                        value: ord_ary.name,
                    },
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: ord_ary.tel,
                    },
                    {
                        display_name: "Email",
                        variable_name: "email",
                        value: ord_ary.email,
                    }
                ]
            },
            callback: function(response){
                //For confirming payment
                var message = 'Success!!! Your transaction ref is: ' + response.reference;
//
                $.ajax({

                    url: "{{url('/transaction/verify')}}",
                    type: "POST",
                    data: {
                        "reference": response.reference,
                        "secret_key": ord_ary.secret_key,
                        "_token":$('input[name=_token]').val(),
                    },
                    success: function(data){
                      if(data == "success"){

                          $.ajax({

                    url: "{{url('/confirm/donation/payment')}}",
                    type: "POST",
                    data: {
                        "email": ord_ary.email,
                        "donation_id": ord_ary.donation_id,
                        "amount": ord_ary.amount,
                        "status": "<?php echo SUCCESSFUL ?>",
                        "reference": response.reference,
                        "payment_gateway_id": ord_ary.payment_gateway_id,
                        "_token":$('input[name=_token]').val()
                    },
                    success: function(data){
                        if(data.status == "success"){
                          window.location = "donation/status/"+ ord_ary.ref_id +"";
                        } else {
                            window.location = "donation/status/"+ ord_ary.ref_id +"";
                        }
                    },
                    });
                        }else{
                         $.ajax({

                    url: "{{url('/confirm/donation/payment')}}",
                    type: "POST",
                    data: {
                        "email": ord_ary.email,
                        "donation_id": ord_ary.donation_id,
                        "amount": ord_ary.amount,
                        "status": "<?php echo UNSUCCESSFUL ?>",
                        "reference": response.reference,
                        "payment_gateway_id": ord_ary.payment_gateway_id,
                        "_token":$('input[name=_token]').val(),
                    },
                    success: function(data){
                       window.location = "donation/status/"+ ord_ary.ref_id +"";
                    },
                    });
                      }
                  }
                });

            },
            onClose: function(){
          }
            });
            handler.openIframe();
        }


        function payWithFlutter(){
        var flw_ref = "", chargeResponse = "", API_publicKey = ord_ary.public_key;

        getpaidSetup(
        {
            PBFPubKey: ord_ary.public_key,
            customer_email: ord_ary.email,
            //amount: 1,
            amount: ord_ary.amount,
            customer_phone: ord_ary.tel,
            currency: "NGN",
            payment_method: "both",
            txref: ord_ary.ref_id,
            meta: [{metaname:"flightID", metavalue: "AP1234"}],
            onclose:function(response) {},
            callback:function(response) {
                //console.log("This is the response returned after a charge", response);
                if(response.tx.chargeResponseCode =='00' || response.tx.chargeResponseCode == '0') {
                    $.ajax({
                        url: "{{url('/confirm/donation/payment')}}",
                        type: "POST",
                        data: {
                            "email": ord_ary.email,
                            "donation_id": ord_ary.donation_id,
                            "amount": ord_ary.amount,
                            "status": "<?php echo SUCCESSFUL ?>",
                            "reference": ord_ary.ref_id,
                            "payment_gateway_id": ord_ary.payment_gateway_id,
                            "_token":$('input[name=_token]').val()
                        },
                        success: function(data){
                            window.location = "donation/status/"+ ord_ary.ref_id +"";
                        },
                    });
                } else {
                    $.ajax({
                        url: "{{url('/confirm/donation/payment')}}",
                        type: "POST",
                        data: {
                            "email": ord_ary.email,
                            "donation_id": ord_ary.donation_id,
                            "amount": ord_ary.amount,
                            "status": "<?php echo UNSUCCESSFUL ?>",
                            "reference": ord_ary.ref_id,
                            "payment_gateway_id": ord_ary.payment_gateway_id,
                            "_token":$('input[name=_token]').val(),
                        },
                        success: function(data){
                            window.location = "donation/status/"+ ord_ary.ref_id +"";
                        },
                    });
                }
            }
        });
    }

    $('#donate-form').submit(function(e){
		e.preventDefault();
        open_loader('#page');

		var form = $("#donate-form")[0];
		var _data = new FormData(form);
		$.ajax({
			url: '{{url("/user/donation")}}',
			data: _data,
			enctype: 'multipart/form-data',
			processData: false,
			contentType:false,
			type: 'POST',
			success: function(data){
                     ord_ary = data;
                    if(ord_ary.status == "success"){
                        $('#donate').modal('hide');
                     if(ord_ary.payment_type == "paystack"){
                            payWithPaystack(); 
                        } else if(ord_ary.payment_type == "flutter"){
                            payWithFlutter(); 
                         } 
                    } else {
                      toastr.error(ord_ary.message, ord_ary.status);
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