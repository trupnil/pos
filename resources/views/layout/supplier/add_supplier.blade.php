@extends('layout.master')
@section('main-content')
<div class="page-wrapper">
<!-- ============================================================== -->
<!-- Title and breadcrumb -->
<!-- ============================================================== -->
<div class="page-titles">
    <div class="d-flex align-items-center">
        <h5 class="font-medium m-b-0">Supplier</h5>
        <div class="custom-breadcrumb ml-auto">
            <a href="#!" class="breadcrumb">Home</a>
            <a href="#!" class="breadcrumb">Supplier</a>
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
                    <h5 class="card-title">Add Supplier</h5>
                   
                    <form class="formValidate" id="formValidate" method="get" action="#">
                        <div class="success-alert-bar p-15 m-b-20 green white-text">
                            Thanks for submitting the form.
                        </div>
                        <div class="error-alert-bar p-15 m-b-20 red white-text">
                            Please fill out all the required inputs.
                        </div>
                        <div class="row">
                            <div class="input-field col s4">
                                <label for="uname">Supplier Name*</label>
                                <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                                <div class="errorTxt1"></div>
                            </div>
                             <div class="col s4">
                                <div class="input-field">
                                    <select class="error" id="crole" name="crole" data-error=".errorTxt6">
                                        <option value="" disabled selected>Choose your profile</option>
                                        <option value="1">Manager</option>
                                        <option value="2">Developer</option>
                                        <option value="3">Business</option>
                                    </select>
                                    <label>Supplier Group *</label>
                                    <div class="errorTxt6"></div>
                                </div>
                            </div>
                            <div class="input-field col s4">
                                <label for="cemail">Supplier Code *</label>
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
                                    <label>Currency *</label>
                                    <div class="errorTxt6"></div>
                                </div>
                            </div>
                            <div class="input-field col s6">
                                <label for="localname">Local Name *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>

 
                             <div class="input-field col s3">
                                <label for="localname">Opening Balance *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            <div class="col s3">
                                <div class="input-field">
                                    <select class="error" id="crole" name="crole" data-error=".errorTxt6">
                                        <option value="" disabled selected>Choose your profile</option>
                                        <option value="1">Manager</option>
                                        <option value="2">Developer</option>
                                        <option value="3">Business</option>
                                    </select>
                                    <label>Debit / Credit *</label>
                                    <div class="errorTxt6"></div>
                                </div>
                            </div>
                             <div class="input-field col s3">
                                <label for="localname">Credit Limit *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                             <div class="input-field col s3">
                                <label for="localname">Credit Days *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                          
                          <div class="input-field col s6">
                                <label for="localname">Address *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            <div class="col s3">
                                <div class="input-field">
                                    <select class="error" id="crole" name="crole" data-error=".errorTxt6">
                                        <option value="" disabled selected>Choose your profile</option>
                                        <option value="1">Manager</option>
                                        <option value="2">Developer</option>
                                        <option value="3">Business</option>
                                    </select>
                                    <label>Country *</label>
                                    <div class="errorTxt6"></div>
                                </div>
                            </div>
                            <div class="input-field col s3">
                                <label for="localname">City *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            

                            <div class="input-field col s3">
                                <label for="localname">P.O.Box *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            <div class="input-field col s3">
                                <label for="localname">Postal Code *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            <div class="input-field col s6">
                                <label for="localname">Postal Address *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>

                            <div class="input-field col s3">
                                <label for="localname">Mobile Number *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            <div class="input-field col s3">
                                <label for="localname">Landline Number *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            <div class="input-field col s3">
                                <label for="localname">Fax Number *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>
                            <div class="input-field col s3">
                                <label for="localname">Email *</label>
                                <input id="localname" type="text" name="localname" data-error=".localname">
                                <div class="localname"></div>
                            </div>

                           <div class="file-field input-field col s12">
                        <div class="btn indigo">
                            <span>Logo</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
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
</div>


@endsection

@push('other-scripts')
<script src="{{asset('frontend/assets/extra-libs/prism/prism.js')}}"></script>
<script src="{{asset('frontend/dist/js/pages/forms/jquery.validate.min.js')}}"></script>
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