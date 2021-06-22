@extends('layouts.admin.app')

@section('title')
    Admin-Team Members Create
@endsection

@section('subheader')
    @include('admin.team_members.subheader')
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
            <form class="form" method="POST" action="{{ route('admin.team-members.store') }}" id="product_create_form"
                enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-4">
                                <label>* @lang('admin.name'):</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name"
                                    value="{{ old('name') }}" />
                                @error('name')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label>* @lang('admin.title'):</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter title"
                                    value="{{ old('title') }}" />
                                @error('title')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label>* @lang('admin.breif'):</label>
                                <input type="text" name="breif" class="form-control"
                                    placeholder="Enter breif"
                                    value="{{ old('breif') }}" />
                                @error('breif')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.instagram'):</label>
                                <input type="text" name="instagram_link" class="form-control"
                                    placeholder="Enter Instagram Link" value="{{ old('instagram_link') }}" />
                                @error('instagram_link')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.facebook'):</label>
                                <input type="text" name="facebook_link" class="form-control"
                                    placeholder="Enter Facebook Link" value="{{ old('facebook_link') }}" />
                                @error('facebook_link')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.twitter'):</label>
                                <input type="text" name="twitter_link" class="form-control"
                                    placeholder="Enter Twitter Link" value="{{ old('twitter_link') }}" />
                                @error('twitter_link')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.linkedin'):</label>
                                <input type="text" name="linkedin_link" class="form-control"
                                    placeholder="Enter LinkedIn Link" value="{{ old('linkedin_link') }}" />
                                @error('linkedin_link')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="image-input image-input-outline" id="image">
                                    <div class="image-input-wrapper" style="background-image: url()"></div>

                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Change Image">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="image_remove" />
                                    </label>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel Logo">
                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                    </span>
                                </div>
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
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('assets/admin/js/pages/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <!--end::Page Vendors-->

    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('assets/admin/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
    <!--end::Page Scripts-->
    <script src="{{ asset('assets/admin/js/pages/custom/products/edit.js') }} "></script>
    <!--end::Page Scripts-->
@endsection
