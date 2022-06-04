@extends('layouts.website_mother_layout')
@section('content')
@section('technofirm', 'services')

<!--Breadcrumb Area-->
<section class="breadcrumb-area" data-background="images/banner/4.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="bread-titlev2">
                    <h1 class="wow fadeInUp" data-wow-delay=".2s">{{$serviceOverview->page_heading}}</h1>
                </div>
            </div>
        </div>
</section>
<!--End Breadcrumb-->
<!--Start About-->
<section class="service pad-tb bg-gradient5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-image mt0 wow fadeIn">
                    <img src="{{url($serviceOverview->image)}}" alt="image" class="img-fluid no-shadow" />
                </div>
            </div>
            <div class="col-lg-8 block-1 m-mt50">
                <div class="common-heading text-l pl25">
                    <h2 class="text-radius text-light text-animation bg-b">{{$serviceOverview->title}}r</h2>
                    <p>{!!$serviceOverview->details!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->


<!--Start Key points-->
<section class="service pad-tb light-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="text-l service-desc- pr25">
                    <h2 class="mb20 text-radius text-light text-animation bg-b">{{$SectorSF->heading}}</h2>
                    <p>{!!$SectorSF->details!!}</p>
                    <ul class="service-point-2 mt20">
                        @foreach($SectorSF_list as $list)
                        <li>{{$list->featureName}}</li>
                        @endforeach
                    </ul>
                    <a href="{{route('contactUs')}}" class="btn-main bg-btn2 lnk mt30">Request A Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="single-image wow fadeIn">
                    <img src="{{url($SectorSF->image)}}" alt="image" class="img-fluid no-shadow" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Key points-->


<!--Start Service-->
<section class="service-block bg-gradient6 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>Service</span>
                    <h3 class="mb20 text-radius text-light text-animation bg-b">{{$SectorServicesName->Sector_service_name}}</h3>
                </div>
            </div>
        </div>
        <div class="row upset link-hover">
            @foreach($SectorServices as $givenServices)
            <div class="col-lg-6 col-md-12 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon-large"><img src="{{url($givenServices->image)}}" alt="service" class="img-fluid" />
                    </div>
                    <div class="s-block-content-large">
                        <h4>{{$givenServices->title}}</h4>
                        <p>{{$givenServices->details}}.</p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.4s">
                <p>Hire a <span>Graphic Designer</span></p>
                <a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->

<!--Start Why Choose-->
<section class="service-block pad-tb bg-gradient7">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">
                    <span>We Deliver Our Best</span>
                    <h2>Why Choose Niwax</h2>
                    <p class="mb30">Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit
                        nisi. Vestibulum eget risus velit.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon"><img src="{{asset('frontendAssets/assets/images/icons/teama.svg')}}" alt="service" class="img-fluid"></div>
                    <div class="s-block-content">
                        <h4>Reliable Service. In House Team</h4>
                        <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon"><img src="{{asset('frontendAssets/assets/images/icons/link.svg')}}" alt="service" class="img-fluid"></div>
                    <div class="s-block-content">
                        <h4>Trusted by People Like You</h4>
                        <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon"><img src="{{asset('frontendAssets/assets/images/icons/tech.svg')}}" alt="service" class="img-fluid"></div>
                    <div class="s-block-content">
                        <h4>Complete Technical Competency</h4>
                        <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon"><img src="{{asset('frontendAssets/assets/images/icons/hi.svg')}}" alt="service" class="img-fluid"></div>
                    <div class="s-block-content">
                        <h4>Friendly & Cordial in Nature</h4>
                        <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon"><img src="{{asset('frontendAssets/assets/images/icons/badge.svg')}}" alt="service" class="img-fluid"></div>
                    <div class="s-block-content">
                        <h4>Excellent Quality Delivered on Time</h4>
                        <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s">
                <div class="s-block wide-sblock">
                    <div class="s-card-icon"><img src="{{asset('frontendAssets/assets/images/icons/tin.svg')}}" alt="service" class="img-fluid"></div>
                    <div class="s-block-content">
                        <h4>Effective & Continuous Communication</h4>
                        <p>In vel hendrerit nisi. Vestibulum eget risus velit.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
                <p>Let's Start a <span>New Project</span> Together</p>
                <a href="#" class="btn-main bg-btn2 lnk">Inquire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Why Choose-->

@endsection
