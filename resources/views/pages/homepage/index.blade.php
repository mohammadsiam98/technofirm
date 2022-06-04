@extends('layouts.website_mother_layout')
@section('content')
@section('title', 'homepage')

<!--Start Hero-->
<section class="hero-slider hero-style">
    <div class="swiper-container">
        <!-- start swiper-wrapper -->
       
        <div class="swiper-wrapper">
            @foreach($bannerFetch as $banner)
            <!--slider 1 start -->
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" style="background-image: url(<?php echo $banner->image?>) ">
                </div>
            </div>
            <!--slider 1 end -->
            @endforeach
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
                    @foreach($companyDetailsFetch as $companyDetails)
                    <p style="font-family: poppins; text-align:center">{{$companyDetails->details}}</p>
                    @endforeach
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
                        <h4>Content Writing Service</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".6s">
                <div class="wide-block service-img3" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>Wep Application</span>
                        <h4>Website Design & Development</h4>
                        <a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".8s">
                <div class="wide-block service-img4" data-tilt data-tilt-max="2" data-tilt-speed="600">
                    <div class="block-space-">
                        <span>SEO</span>
                        <h4>Search Engine Optimization</h4>
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
                    <h2 class="mb20"><span class="text-second text-bold"> Our company features</span></h2>
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
                <div style="margin-top:180px" data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image wow fadeIn" data-wow-duration="2s">
                    <img src="{{asset('frontendAssets/assets/images/Company-pana.svg')}}" alt="image" class="w-100">
                </div>
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
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomInDown;">
                    <a href="{{route('ourPortfolio')}}" class="btn-main bg-btn2 lnk">View more portfolio<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
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
            @foreach($blogsFetch as $blogs)
            <div class="col-lg-4 col-sm-6 mt30">
                <div class="single-blog-post- up-hor shdo">
                    <div class="single-blog-img-">
                        <a href="{{route('singleBlogPost',[$blogs->title])}}"><img src="{{url($blogs->thumbnail_image)}}" alt="girl" class="img-fluid" /></a>
                        <div class="entry-blog-post dg-bg2">
                            <span class="bypost-"><a href="#"><i class="fas fa-tag"></i>  <td class="text-center badge rounded-pill badge-light-primary me-1" style="margin-top: 12px;">{{$blogs->get_category->categoryName}}</td></a></span>
                        </div>
                    </div>
                    <div class="blog-content-tt">
                        <div class="single-blog-info-">
                            <h4><a href="{{ route('singleBlogPost',$blogs->slug) }}">{{$blogs->title}}</a></h4>
                            <p>{!!Str::limit($blogs->description,50, $end='....')!!}</p>
                        </div>
                        <div class="post-social">
                            <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                <span class="posted-on-">
                                    <a href="#">
                                        <i class="fas fa-clock"></i>
                                        <?php
                                        echo date("d.m.Y", strtotime($blogs->created_at));
                                        ?>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
           
          
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomInDown;">
                    <a href="{{route('blog')}}" class="btn-main bg-btn2 lnk">View more blogs<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blogs-->

@endsection
