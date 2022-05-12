@extends('layouts.website_mother_layout')
@section('content')
@section('title', 'homepage')

<!--Start Hero-->
<section class="hero-slider hero-style">
    <div class="swiper-container">
        <!-- start swiper-wrapper -->
        <div class="swiper-wrapper">
            <!--slider 1 start -->
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="{{asset('frontendAssets/assets/images/hero/slider-1.jpg')}}">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>Build Your Brand With Niwax</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>We are enabling digital transformation for our clients since 1999 by providing tailored
                                solutions</p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="btn-main bg-btn lnk">View Showcase <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--slider 1 end -->
            <!--slider 2 start -->
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="{{asset('frontendAssets/assets/images/hero/slider-2.jpg')}}">
                    <div class="container">
                        <div data-swiper-parallax="300" class="slide-title">
                            <h2>Find Your Place on the Web</h2>
                        </div>
                        <div data-swiper-parallax="400" class="slide-text">
                            <p>We are enabling digital transformation for our clients since 1999 by providing tailored
                                solutions</p>
                        </div>
                        <div class="clearfix"></div>
                        <div data-swiper-parallax="500" class="slide-btns">
                            <a href="#" class="btn-main bg-btn lnk">View Showcase <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--slider 2 end -->
        </div>
        <!-- end swiper-wrapper -->
        <!-- swipper controls -->
        <div class="swiper-pagination"></div>

        <!-- swipper controls -->
    </div>
</section>
<!--End Hero-->


<!--Start About-->
<section class="about-sec-app pad-tb pt60 dark-bg2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common-heading text-l">
                    <h2 class="mb30 text-center"><span class="text-second text-bold">Technofirm | </span> Why do you
                        choose us
                    </h2>
                    <p style="font-family: poppins; text-align:center">Lorem Ipsum is text of the printing and typesetting
                        industry. Lorem
                        Ipsum has been the industry's
                        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section service-2 pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Services We’re Provided</span>
                    <h2 class="mb30 text-radius text-light text-animation bg-b">Our Top Digital Marketing Services</h2>
                </div>
            </div>
        </div>
        <div class="row upset link-hover">
            <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                <div class="wide-block service-img1" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>SMM</span>
                        <h4>Digital Media Marketing</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".4s">
                <div class="wide-block service-img2" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>Content Writing </span>
                        <h4>Content Marketing Service</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".6s">
                <div class="wide-block service-img3" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>Wep Application</span>
                        <h4>Website & Software Development</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".8s">
                <div class="wide-block service-img4" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>WEB DESIGN</span>
                        <h4>Website Design & Development</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="-cta-btn mt70">
            <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay=".9s">
                <p>Let's Start A <span>New Project Together</span></p>
                <a href="#" class="btn-main bg-btn2 lnk">Request A Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
            </div>
        </div>
    </div>
</section>
<!--End Service-->

<!--why choose-->
<section class="why-choos-lg-nx pad-tb deep-dark bg-gradient10">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <span>Why Choose Us</span>
                    <h2 class="mb20">Technofirm<span class="text-second text-bold"> Our company features</span></h2>
                    <div class="itm-media-object mt40 tilt-3d">
                        <div class="media">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{asset('frontendAssets/assets/images/icons/computers.svg')}}" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Streamlined Project Management</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{asset('frontendAssets/assets/images/icons/worker.svg')}}" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>A Dedicated Team of Experts</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                        <div class="media mt40">
                            <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{asset('frontendAssets/assets/images/icons/deal.svg')}}" alt="icon" class="layer"></div>
                            <div class="media-body">
                                <h4>Completion of Project in Given Time</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo
                                    elementum semper. Mauris aliquet egestas metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn" data-wow-duration="2s"><img src="{{asset('frontendAssets/assets/images/Development-cuate.svg')}}" alt="image" class="w-100"></div>

                <div data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn" data-wow-duration="2s"><img src="{{asset('frontendAssets/assets/images/About us page-cuate.svg')}}" alt="image" class="w-100"></div>


            </div>
        </div>
    </div>
</section>
<!--End why choose-->

<!--Start Portfolio-->
<section class="portfolio-section-nx pad-tb">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span>Our Work</span>
                    <h2 class="mb0 text-radius text-light text-animation bg-b">Our Latest Creative Works</h2>
                </div>
            </div>
        </div>
        <div class="row mt60">

            <div class="col-lg-12 col-sm-12 wptbb">
                <div class="pbwide shadow bg-gradient1">
                    <div class="portfolio-item-info-tt">
                        <div class="logowide mb20"><img src="{{asset('frontendAssets/assets/images/client_image_ayeener_gurukul.png')}}" style="height: 50px; width:auto" alt="logo" class="img-fluid"></div>
                        <div class="widebloktag"><span>Design</span> <span>Coding</span> </div>
                        <h3 class="mt30 mb30">Ayeener Gurukul</h3>
                        <ul class="info-list-ul">
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Able to create subject</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Able to create exams</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Able to create course</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Enroll course</li>
                        </ul>

                    </div>
                    <div class="portfolio-wide-image">
                        <div class="img-wide-blocktt tilt-outer">
                            <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                                <div class="desktopblock shadow1"><img src="{{asset('frontendAssets/assets/images/ayeenerGurukul.PNG')}}" alt="img" class="img-fluid"> </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 wptbb">
                <div class="pbwide shadow bg-gradient2">
                    <div class="portfolio-item-info-tt">
                        <div class="logowide mb20"><img src="{{asset('frontendAssets/assets/images/cityLawyers.png')}}" alt="logo" style="height: 50px; width:auto" class="img-fluid"></div>
                        <div class="widebloktag"><span>Design</span> <span>Coding</span> </div>
                        <h3 class="mt30 mb30">City Lawyers</h3>
                        <ul class="info-list-ul">
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Portfolio Website</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Able to show laws</li>
                        </ul>

                    </div>
                    <div class="portfolio-wide-image">
                        <div class="img-wide-blocktt tilt-outer">
                            <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                                <div class="desktopblock shadow1"><img src="{{asset('frontendAssets/assets/images/citylaw.png')}}" alt="img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 wptbb">
                <div class="pbwide shadow bg-gradient3">
                    <div class="portfolio-item-info-tt">
                        <div class="logowide mb20"><img src="{{asset('frontendAssets/assets/images/client/customer-logo-7.png')}}" style="height: 50px; width:auto" alt="logo" class="img-fluid"></div>
                        <div class="widebloktag"><span>Design</span> <span>Coding</span></div>
                        <h3 class="mt30 mb30">That Column</h3>
                        <ul class="info-list-ul">
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Able to upload blog</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> 15 blog features</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> users can upload blog</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> users can buy blogs</li>
                        </ul>

                    </div>
                    <div class="portfolio-wide-image">
                        <div class="img-wide-blocktt tilt-outer">
                            <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                                <div class="desktopblock shadow1"><img src="{{asset('frontendAssets/assets/images/thatColumn.PNG')}}" alt="img" class="img-fluid"> </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-sm-12 wptbb">
                <div class="pbwide shadow bg-gradient4">
                    <div class="portfolio-item-info-tt">
                        <div class="logowide mb20"><img src="{{asset('frontendAssets/assets/images/school.png')}}" style="height: 50px; width:auto" alt="logo" class="img-fluid"></div>
                        <div class="widebloktag"><span>Design</span> <span>Coding</span></div>
                        <h3 class="mt30 mb30">River Dale School</h3>
                        <ul class="info-list-ul">
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> School Information</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Pay Online </li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Admission Information</li>
                            <li><img src="{{asset('frontendAssets/assets/images/check.png')}}" alt=""> Student's Syllabus</li>
                        </ul>
                        <a href="#" class="btn-outline lnk mt30">View Case Study <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                    <div class="portfolio-wide-image">
                        <div class="img-wide-blocktt tilt-outer">
                            <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                                <div class="desktopblock shadow1"><img src="{{asset('frontendAssets/assets/images/riverdaleSchool.PNG')}}" alt="img" class="img-fluid"> </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Portfolio-->



<!--Start work-category-->
<section class="work-category pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading ptag">

                    <h2 class="text-radius text-light text-animation bg-b">Industries We Serve</h2>
                    <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="row mt30">
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/house.svg')}}" alt="img">
                    <h6>Real estate</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/travel-case.svg')}}" alt="img">
                    <h6>Tour &amp; Travels</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/video-tutorials.svg')}}" alt="img">
                    <h6>Education</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/taxi.svg')}}" alt="img">
                    <h6>Transport</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/event.svg')}}" alt="img">
                    <h6>Event</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/smartphone.svg')}}" alt="img">
                    <h6>eCommerce</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/joystick.svg')}}" alt="img">
                    <h6>Game</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/healthcare.svg')}}" alt="img">
                    <h6>Healthcare</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/money-growth.svg')}}" alt="img">
                    <h6>Finance</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/baker.svg')}}" alt="img">
                    <h6>Restaurant</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/mobile-app.svg')}}" alt="img">
                    <h6>On-Demand</h6>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s">
                <div class="industry-workfor hoshd">
                    <img src="{{asset('frontendAssets/assets/images/icons/groceries.svg')}}" alt="img">
                    <h6>Grocery</h6>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End  work-category-->

<!--Start Testinomial-->
<section class="testinomial-section-nx bg-gradient6 pb100 pt100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading text-l">
                    <h2 class="mb0 text-radius text-light text-animation bg-b">What our clients say about us</h2>
                </div>
                <div class="owl-carousel testimonial-card-b mt60">
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>

                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-card">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="-client-details- mt20">
                            <i class="fas fa-quote-left posiqut"></i>
                            <div class="reviewer-text">
                                <h4>Buck Kinnear</h4>
                                <p>Business Owner, <small>Jaipur</small></p>
                                <div class="star-rate mt10">
                                    <ul>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="clients-creative-pic pl25">
                    <img src="{{asset('frontendAssets/assets/images/Customer Survey-pana.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testinomial-->

<!--Start Blogs-->
<section class="blogs-section pb120 pt120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">
                    <span class="text-effect">Check our blog</span>
                    <h2 class="mb30 text-radius text-light text-animation bg-b">Latest Blog Stories</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="{{asset('frontendAssets/assets/images/blog/blog-dg-1.jpg')}}" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Nodejs</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 23, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Everything You Need To Know About Nodejs!</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="{{asset('frontendAssets/assets/images/blog/blog-dg-2.jpg')}}" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Laravel</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 24, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Exploring the Key Features of Laravel 7 Framework</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="#"><img src="{{asset('frontendAssets/assets/images/blog/blog-dg-3.jpg')}}" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Mobile Application</a></span>
                            <span class="posted-on-">
                                <a href="#"><i class="fas fa-clock"></i> Sep 25, 2020</a>
                            </span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="#">Best Technology for Mobile Application Development</a></h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <div class="ss-inline-share-content">
                                    <div class="ss-social-icons-container">
                                        <a href="javascript:void(0)">Shares</a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                        <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blogs-->

@endsection
