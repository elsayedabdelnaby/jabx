@extends('layouts.admin.app')

@section('title')
    Admin-Products Create
@endsection

@section('subheader')
    @include('admin.products.subheader')
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
            <form class="form" method="POST" action="{{ route('admin.products.store') }}" id="product_create_form"
                enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.name'):</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name of product"
                                    value="{{ old('name') }}" />
                                @error('name')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-3">
                                <label>@lang('admin.is_publish'):</label>
                                <input type="checkbox" name="is_publish" class="form-control" @if (old('is_publish') == 'on') checked @endif />
                            </div>
                            <div class="col-lg-3">
                                <label>@lang('admin.display_in_header'):</label>
                                <input type="checkbox" name="display_in_header" class="form-control" @if (old('display_in_header') == 'on') checked @endif />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.short_description'):</label>
                                <input type="text" name="short_description" class="form-control"
                                    placeholder="Enter short description of product"
                                    value="{{ old('short_description') }}" />
                                @error('short_description')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.slug'):</label>
                                <input type="text" name="slug" class="form-control" placeholder="Enter slug of product"
                                    value=" {{ old('slug') }}" />
                                @error('slug')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <label>* @lang('admin.description'):</label>
                                <div class="card card-custom">
                                    <div class="card-body">
                                        <textarea name="description" id="kt-ckeditor-product-description">
                                                    {{ old('description') }}
                                                </textarea>
                                    </div>
                                </div>
                                @error('description')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.meta_title'):</label>
                                <input type="text" name="meta_title" class="form-control"
                                    placeholder="Enter meta title of product" value="{{ old('meta_title') }}" />
                                @error('meta_title')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.meta_description'):</label>
                                <input type="text" name="meta_description" class="form-control"
                                    placeholder="Enter meta description of product"
                                    value="{{ old('meta_description') }}" />
                                @error('meta_description')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.meta_keywords'):</label>
                                <input type="text" name="meta_keywords" class="form-control"
                                    placeholder="Enter meta keywords of product" value="{{ old('meta_keywords') }}" />
                                @error('meta_keywords')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.sort'):</label>
                                <input type="number" min="1" name="sort" class="form-control"
                                    placeholder="Enter sort of product" value="{{ old('sort') }}" />
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
