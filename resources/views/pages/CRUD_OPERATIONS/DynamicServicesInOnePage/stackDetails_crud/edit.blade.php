@extends('layouts.admin_dashboard_layout')
@section('content')
@section('title', 'Stack Details Edit')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-12 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <a href="{{route('sector_technologies_details.list')}}">
                            <button type="button" class="btn btn-dark waves-effect waves-float waves-light" style="float: right">
                                <span style="font-size: 22px; margin-right:5px;">Stack Details List</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
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
        <div class="content-body">
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <form id="" action="{{route('sector_technologies_details.update',$stackDetails->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    {{-- Sector Technology Names List --}}
                                    <div class="col-12 basic-select2">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="title">Technology Heading</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <select name="stack_id" class="select2 form-select" id="select2-basic">
                                                    <option class="disabled">--Select Option--</option>
                                                    @foreach ($stackList as $sectorTechnologiesNameFetch)
                                                    <option <?php if($sectorTechnologiesNameFetch->id == $stackDetails->stack_id){?> selected <?php }  ?> value="{{ $sectorTechnologiesNameFetch->id }}">{{ $sectorTechnologiesNameFetch->Sector_technologies_name_heading }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Sector Technology Names List --}}

                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="stackName">Stack Name</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="stackName" class="form-control" name="stackName" value="{{$stackDetails->stackName}}" placeholder="Edit your stack name" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="col-sm-3">
                                                <label class="col-form-label" for="details">Stack Details</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="details" class="form-control" name="details" value="{{$stackDetails->details}}" value="{{ (old('details')?old('details'):'') }}" placeholder="Edit your stack details" autocomplete="off" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-1 row">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label style="font-family: 'Poppins', sans-serif; color:black"> Choose an image<a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="image" />
                                                    <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                </label>
                                                <div class="custom-file-container__image-preview"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update Stack Details</button>
                                        <button type="reset" class="btn btn-info">Reset</button>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </section>


        </div>
    </div>
</div>
<!-- END: Content-->


@endsection
