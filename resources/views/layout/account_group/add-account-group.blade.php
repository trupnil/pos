@extends('layout.master')
@section('main-content')

<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Title and breadcrumb -->
<!-- ============================================================== -->
<div class="page-titles">
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Account Group</h5>
        <div class="custom-breadcrumb ml-auto">
            <a href="#!" class="breadcrumb">Home</a>
            <a href="#!" class="breadcrumb">Account Group</a>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Container fluid scss in scafholding.scss -->
<!-- ============================================================== -->
<div class="container-fluid">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">Add Account Group</h5>
                   
                    <form class="formValidate" id="formValidate" method="get" action="#">
                        <div class="success-alert-bar p-15 m-b-20 green white-text">
                            Thanks for submitting the form.
                        </div>
                        <div class="error-alert-bar p-15 m-b-20 red white-text">
                            Please fill out all the required inputs.
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <label for="uname">Group Name*</label>
                                <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                                <div class="errorTxt1"></div>
                            </div>
                            <div class="input-field col s6">
                                <label for="cemail">Group Code *</label>
                                <input id="cemail" type="email" name="cemail" data-error=".errorTxt2">
                                <div class="errorTxt2"></div>
                            </div>
                          
                            <div class="col s6">
                                <div class="input-field">
                                    <select class="error" id="crole" name="crole" data-error=".errorTxt6">
                                        <option value="" disabled selected>Choose your profile</option>
                                        <option value="1">Manager</option>
                                        <option value="2">Developer</option>
                                        <option value="3">Business</option>
                                    </select>
                                    <label>Account Main Group *</label>
                                    <div class="errorTxt6"></div>
                                </div>
                            </div>

                            <div class="col s6">
                                <div class="input-field">
                                    <select class="error" id="crole" name="crole" data-error=".errorTxt6">
                                        <option value="" disabled selected>Choose your profile</option>
                                        <option value="1">Manager</option>
                                        <option value="2">Developer</option>
                                        <option value="3">Business</option>
                                    </select>
                                    <label>Account Super Group *</label>
                                    <div class="errorTxt6"></div>
                                </div>
                            </div>
                            

                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</div>


@endsection

@push('other-scripts')
<script src="{{asset('frontend/assets/extra-libs/prism/prism.js')}}"></script>
<script src="{{ asset('frontend/dist/js/pages/forms/jquery.validate.min.js') }}"></script>
<script>
$(function() {
$("#formValidate").validate({
rules: {
uname: {
required: true,
minlength: 5
},
cemail: {
required: true,
email: true
},
password: {
required: true,
minlength: 5
},
cpassword: {
required: true,
minlength: 5,
equalTo: "#password"
},
curl: {
required: true,
url: true
},
crole: "required",
ccomment: {
required: true,
minlength: 15
},
cgender: "required",
cagree: "required",
},
//For custom messages
messages: {
uname: {
required: "Enter a username",
minlength: "Enter at least 5 characters"
},
curl: "Enter your website",
},
errorElement: 'div',
errorPlacement: function(error, element) {
var placement = $(element).data('error');
if (placement) {
$(placement).append(error)
} else {
error.insertAfter(element);
}
},
invalidHandler: function(e, validator) {
var errors = validator.numberOfInvalids();
if (errors) {
$('.error-alert-bar').show();
}
},
submitHandler: function() {
$('.error-alert-bar').hide();
$('.success-alert-bar').show().delay(5000).fadeOut();
}
});
});
</script>
@endpush