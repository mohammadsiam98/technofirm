@extends('layouts.website_mother_layout')
@section('content')
@section('technofirm', 'about-us')


<!--Breadcrumb Area-->
<section class="breadcrumb-area text-l banner-3">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="#">About Us</a></li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="about-agencys pad-tb block-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 v-center">
                <div class="image-block upset bg-shape wow fadeIn">
                    <img src="{{asset('assets/images/about/cheerful-businessman.jpg')}}" alt="about us Niwax" class="img-fluid" />
                </div>
            </div>
            <div class="col-lg-7">
                <div class="common-heading text-l">

                    <h3 class="mb0">Tom Smile</h3>
                    <p class="niwax21">Founder, Chairman & CFO</p>
                    <p class="pt20"><i class="fas fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. is simply dummy text of the printing and typesetting industry. <i class="fas fa-quote-right"></i> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About-->

<!--Start Mission Vision-->
<section class="missionvision dark-bg4 pad-tb bg-gradient3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <h2 class="text-radius text-light text-animation bg-b" style="text-align: center; margin-bottom:20px">Our
                    Story</h2>
            </div>
            <div class="col-lg-12 col-sm-12">
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the
                    industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s.</p>
            </div>
        </div>

    </div>
</section>
<!--End Mission Vision-->

<!--Start About Features-->
<section class="about-agencys pad-tb block-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="common-heading">

                    <h2 class="text-radius text-light text-animation bg-b">Management Profiles</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center niwaxgap40">
            <div class="col-lg-5 v-center order1">
                <div class="image-block">
                    <img src="{{asset('assets/images/about/leadership.jpg')}}" alt="about us Niwax" class="img-fluid" />
                </div>
            </div>

            <div class="col-lg-5 v-center order2">
                <div class="common-heading text-l">
                    <span>Director</span>
                    <h3 class="mb20">Israfeel Sagor</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center niwaxgap40 mt60">
            <div class="col-lg-5 v-center order2">
                <div class="common-heading text-l">
                    <span>Strength</span>
                    <h3 class="mb20">Shihab Hossain</h3>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.</p>
                </div>
            </div>

            <div class="col-lg-5 v-center order1">
                <div class="image-block">
                    <img src="{{asset('assets/images/about/collaboration.jpg')}}" alt="about us Niwax" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--End About Features-->

@endsection
