@extends('layouts.admin.app')

@section('title')
    Admin-Edit Site Settings
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
                    @lang('admin.edit') @lang('admin.site_settings') </h5>
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
            <form class="form" method="POST" action="{{ route('admin.sitesettings.update', [$site_settings->id]) }}"
                id="site_settings_edit_form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.title'):</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title of website"
                                    value="{{ $site_settings->title }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.meta_title'):</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter meta title"
                                    value="{{ $site_settings->meta_title }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.meta_keywords'):</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                    placeholder="Enter meta keywords" value="{{ $site_settings->meta_keywords }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.meta_description'):</label>
                                <input type="text" name="meta_description" class="form-control"
                                    placeholder="Enter meta description" value="{{ $site_settings->meta_description }}" />
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <div class="image-input image-input-outline" id="logo">
                                <div class="image-input-wrapper" style="background-image: url({{ asset($site_settings->getLogoPathAttribute()) }})"></div>
                            
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change Logo">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="logo" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="logo_remove"/>
                                </label>
                            
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel Logo">
                                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-input image-input-outline" id="favicon">
                                <div class="image-input-wrapper" style="background-image: url({{ asset($site_settings->getFaviconPathAttribute()) }})"></div>
                            
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change favicon">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="favicon" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="favicon_remove"/>
                                </label>
                            
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel favicon">
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
    <script src="{{ asset('assets/admin/js/pages/custom/site_settings/edit-sitesettings.js') }} "></script>
    <!--end::Page Scripts-->
@endsection
