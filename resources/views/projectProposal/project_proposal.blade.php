@extends('layouts.website_mother_layout')
@section('content')
@section('technofirm', 'Project-proposal')

<!--Breadcrumb Area-->
<section class="breadcrumb-area banner-6">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                            <h2>Project Proposal</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start Enquire Form-->
<section class="contact-page pad-tb">
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-lg-5 contact2dv">

                <div class="info-wrapr">
                    <h3 class="mb-4">Contact us</h3>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-map-marker"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Address:</span>123 Business Centre London SW1A 1AA</p>
                        </div>
                    </div>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Phone:</span> <a href="tel://1234567920">+ 123 5647 89</a></p>
                        </div>
                    </div>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Email:</span> <a href="https://separateweb.com/cdn-cgi/l/email-protection#d1b8bfb7be91bfb8a6b0a9ffb2bebc"><span class="__cf_email__" data-cfemail="9bf2f5fdf4dbf5f2ecfae3b5f8f4f6">[email&#160;protected]</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="dbox d-flex align-items-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="text pl-4">
                            <p><span>Website</span> <a href="#">www.niwax.com</a></p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="col-lg-7 m-mt30 pr30 pl30">
                <div class="common-heading text-l">
                    <h2 class="mt0 project_proposal_form text-radius text-light text-animation bg-b">Project
                        Proposal</h2>

                </div>
                <div class="form-block">
                    <form id="contactForm" data-bs-toggle="validator" class="shake">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="name" placeholder="Enter name" required data-error="Please fill Out">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="email" id="email" placeholder="Enter email" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group col-sm-6">
                                <select name="Dtype" id="Dtype" required>
                                    <option value="">Type of project</option>
                                    <option value="web">web</option>
                                    <option value="graphic">graphic</option>
                                    <option value="video">video</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea id="message" rows="5" placeholder="Enter your message" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
                            <label class="custom-control-label" for="customCheck">I agree to the <a href="javascript:void(0)">Terms &amp; Conditions</a> of Business Name.</label>
                        </div>
                        <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span>Submit</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                        <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Enquire Form-->


@endsection
