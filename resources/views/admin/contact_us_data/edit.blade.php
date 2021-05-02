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
                    @lang('admin.edit') @lang('admin.contactus_data') </h5>
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
            <form class="form" method="POST" action="{{ route('admin.contactusdata.update', [$contact_us_data->id]) }}"
                id="contact_us_data_edit_form" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.address_title'):</label>
                                <input type="text" name="address_title" class="form-control" placeholder="Enter title of address"
                                    value="{{ $contact_us_data->address_title }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>@lang('admin.address_link'):</label>
                                <input type="text" name="address_link" class="form-control" placeholder="Enter address map link"
                                    value="{{ $contact_us_data->address_link }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.working_times'):</label>
                                <input type="text" name="working_times" class="form-control"
                                    placeholder="Enter working times" value="{{ $contact_us_data->working_times }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.phone_1'):</label>
                                <input type="text" name="phone_1" class="form-control" placeholder="Enter primary phone"
                                    value="{{ $contact_us_data->phone_1 }}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.email'):</label>
                                <input type="text" name="email" class="form-control"
                                    placeholder="Enter email" value="{{ $contact_us_data->email }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>@lang('admin.phone_2'):</label>
                                <input type="text" name="phone_2" class="form-control" placeholder="Enter secondary phone"
                                    value="{{ $contact_us_data->phone_2 }}" />
                            </div>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-10"></div>
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>@lang('admin.facebook_link'):</label>
                                <input type="text" name="facebook_link" class="form-control"
                                    placeholder="Enter facebook link" value="{{ $contact_us_data->facebook_link }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>@lang('admin.instagram_link'):</label>
                                <input type="text" name="instagram_link" class="form-control" placeholder="Enter instagram link"
                                    value="{{ $contact_us_data->instagram_link }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>@lang('admin.twitter_link'):</label>
                                <input type="text" name="twitter_link" class="form-control"
                                    placeholder="Enter twitter link" value="{{ $contact_us_data->twitter_link }}" />
                            </div>
                            <div class="col-lg-6">
                                <label>@lang('admin.linkedin_link'):</label>
                                <input type="text" name="linkedin_link" class="form-control" placeholder="Enter linkedin link"
                                    value="{{ $contact_us_data->linkedin_link }}" />
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
    <script src="{{ asset('assets/admin/js/pages/custom/contact_us_data/edit.js') }} "></script>
    <!--end::Page Scripts-->
@endsection
