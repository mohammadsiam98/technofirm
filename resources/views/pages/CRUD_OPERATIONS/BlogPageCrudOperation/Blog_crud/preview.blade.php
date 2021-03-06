@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Blog |Preview')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <a href="{{route('Blogs.list')}}">
                                <button type="button" class="btn btn-dark waves-effect waves-float waves-light"
                                    style="float: right">
                                    <span style="font-size: 22px; margin-right:5px;">Blogs List</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-list">
                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic tabs start -->
            <section id="basic-tabs-components">
                <div class="row match-height">
                    <div class="col-xl-12 col-lg-12">
                        <div class="">
                            <!-- Category Preview: In which category this blog is uploaded -->
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                    <div class="me-1">
                                        <h4 class="fw-bolder" style="color:white">Category</h4>
                                        <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                            {{$blog_details->get_category->categoryName}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Category Preview: In which category this blog is uploaded -->

                            <!-- Blog Title Preview -->
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                    <div class="me-1">
                                        <h4 class="fw-bolder" style="color:white">Blog Title</h4>
                                        <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                            {{$blog_details->title}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Title Preview -->

<<<<<<< HEAD

                             <!-- Blog Slug Preview -->
                             <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                    <div class="me-1">
                                        <h4 class="fw-bolder" style="color:white">Blog Slug</h4>
                                        <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                            {{$blog_details->slug}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Slug Preview -->

=======
>>>>>>> 961b3759e142d60936e58246ab405ada43e28be3
                            <!-- Blog Description Preview -->
                            <div class="alert" style="background: #353146">
                                <div class="alert-body d-flex align-items-center justify-content-between flex-wrap p-2">
                                    <div class="me-1">
                                        <h4 class="fw-bolder" style="color:white">Blog Details</h4>
                                        <p class="fw-normal mb-1 mb-lg-0" style="color:white">
                                            {!!$blog_details->description!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Blog Description Preview -->

                        </div>
                    </div>
                </div>

                <!-- Blog Image Preview Which Already Uploaded -->
                <div class="row">
                    <h3>The image which you have uploaded is</h3>
<<<<<<< HEAD
                    <img style="width: 150px; height:auto" src="{{ asset('images/WebsitePosts/'.$blog_details->created_at->format('Y/M/').'/'.$blog_details->image) }}" alt="Blog Image">
=======
                    <img src="{{url($blog_details->image)}}" style="width: 120px;height:auto;" alt="">
>>>>>>> 961b3759e142d60936e58246ab405ada43e28be3
                </div>
                <!-- Blog Image Preview Which Already Uploaded -->

                <!-- Blog Image Thumbnail Preview Which Already Uploaded -->
                <div class="row">
                    <h3>The thumbnail image which you have uploaded is</h3>
<<<<<<< HEAD
                    <img style="width: 150px; height:auto" src="{{ asset('images/WebsitePosts/'.$blog_details->created_at->format('Y/M/').'/'.$blog_details->thumbnail_image) }}" alt="Blog Thumbnail Image">
=======
                    <img src="{{url($blog_details->thumbnail_image)}}" style="width: 120px;height:auto;" alt="">
>>>>>>> 961b3759e142d60936e58246ab405ada43e28be3
                </div>
                <!-- Blog Image Thumbnail Preview Which Already Uploaded -->

            </section>
            <!-- Basic Tabs end -->
        </div>
    </div>
</div>
<!-- END: Content-->


@endsection