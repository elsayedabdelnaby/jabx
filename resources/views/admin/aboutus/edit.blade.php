@extends('layouts.admin.app')

@section('title')
    Admin-Edit About Us
@endsection

@section('css')
@endsection

@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4  subheader-transparent " id="kt_subheader">
        <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">

                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    @lang('admin.edit') @lang('admin.aboutus') </h5>
                <!--end::Title-->

                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200">
                </div>
                <!--end::Separator-->

                <!--begin::Search Form-->
                <div class="d-flex align-items-center" id="kt_subheader_search">
                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total">
                    </span>
                </div>
                <!--end::Search Form-->

            </div>
            <!--end::Details-->

            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <a href="{{ url()->previous() }}" class="btn btn-default font-weight-bold btn-sm px-3 font-size-base">

                    @lang('admin.back') </a>
                <!--end::Button-->

            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Notice-->
            @if (session('message'))
                <div class="alert @if (session('status')) alert-success @else alert-danger @endif alert-dismissible fade show"
                    role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <!--end::Notice-->
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">

        <!--begin::Card body-->
        <div class="card-body px-0">
            <form class="form" method="POST" action="{{ route('admin.aboutus.update', [$aboutus->id]) }}"
                id="aboutus_edit_form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="mb-2">
                        <h3>Main Cards</h3>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>* @lang('admin.ourmission'):</label>
                                <input type="text" name="ourmission" class="form-control" placeholder="Enter Our Mission"
                                    value="{{ $aboutus->ourmission }}" />
                            </div>
                            <div class="col-lg-4">
                                <label>* @lang('admin.why_choose_us'):</label>
                                <input type="text" name="why_choose_us" class="form-control" placeholder="Enter Why Choose Us"
                                    value="{{ $aboutus->why_choose_us }}" />
                            </div>
                            <div class="col-lg-4">
                                <label>* @lang('admin.what_we_do'):</label>
                                <input type="text" name="what_we_do" class="form-control" placeholder="Enter What We Do"
                                    value="{{ $aboutus->what_we_do }}" />
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <h3>Main Section</h3>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.main_section_title'):</label>
                                <input type="text" name="main_section_title" class="form-control" placeholder="Enter Title"
                                    value="{{ $aboutus->main_section_title }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.main_section_description'):</label>
                                <input type="text" name="main_section_description" class="form-control" placeholder="Enter Description"
                                    value="{{ $aboutus->main_section_description }}" />
                            </div>
                            
                            <div class="col-lg-3">
                                <label>* @lang('admin.number_of_projects'):</label>
                                <input type="text" name="projects_number" class="form-control" placeholder="Enter Number of Projects"
                                    value="{{ $aboutus->projects_number }}" />
                            </div>
                            <div class="col-lg-3">
                                <label>* @lang('admin.number_of_users'):</label>
                                <input type="text" name="users_number" class="form-control" placeholder="Enter Number of Users"
                                    value="{{ $aboutus->users_number }}" />
                            </div>
                            <div class="col-lg-3">
                                <label>* @lang('admin.number_of_awards'):</label>
                                <input type="text" name="awards_number" class="form-control" placeholder="Enter Number of Awards"
                                    value="{{ $aboutus->awards_number }}" />
                            </div>

                            <div class="col-lg-3">
                                <h3>Main Section Image</h3>
                                <br>
                                <div class="image-input image-input-outline" id="main_section_image">
                                    <div class="image-input-wrapper" style="background-image: url({{ asset($aboutus->getMainSectionImagePathAttribute()) }})"></div>
                                
                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" 
                                        data-action="change" data-toggle="tooltip" title="" data-original-title="Change Image">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="main_section_image" accept=".png, .jpg, .jpeg"/>
                                        <input type="hidden" name="image_remove"/>
                                    </label>
                                
                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel Main Section Image">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <h3>Meta Data</h3>
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>* @lang('admin.meta_title'):</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter meta title"
                                    value="{{ $aboutus->meta_title }}" />
                            </div>
                            <div class="col-lg-4">
                                <label>* @lang('admin.meta_keywords'):</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                    placeholder="Enter meta keywords" value="{{ $aboutus->meta_keywords }}" />
                            </div>
                            <div class="col-lg-4">
                                <label>* @lang('admin.meta_description'):</label>
                                <input type="text" name="meta_description" class="form-control"
                                    placeholder="Enter meta description" value="{{ $aboutus->meta_description }}" />
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <h3>Banner</h3>
                                <br>
                            <div class="image-input image-input-outline" id="banner">
                                <div class="image-input-wrapper" style="background-image: url({{ asset($aboutus->getBannerPathAttribute()) }})"></div>
                            
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" 
                                    data-action="change" data-toggle="tooltip" title="" data-original-title="Change Banner">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="banner" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="banner_remove"/>
                                </label>
                            
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel Banner">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--begin::Card body-->
    </div>
    <!--end::Card-->
@endsection


@section('script')
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/admin/js/pages/custom/aboutus/edit.js') }} "></script>
    <!--end::Page Scripts-->
@endsection
