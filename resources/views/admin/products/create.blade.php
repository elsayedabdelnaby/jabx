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
                            </div>
                            <div class="col-lg-6">
                                <label>@lang('admin.is_active'):</label>
                                <input type="checkbox" name="is_active" class="form-control" @if (old('is_active') == 'on') checked @endif />
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
    <script src="{{ asset('assets/admin/js/pages/custom/products/edit.js') }} "></script>
    <!--end::Page Scripts-->
@endsection
