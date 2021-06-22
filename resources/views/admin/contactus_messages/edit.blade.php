@extends('layouts.admin.app')

@section('title')
    Admin-ContactUs Messages Edit
@endsection

@section('subheader')
    @include('admin.contactus_messages.subheader')

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
            <form class="form" method="POST" action="{{ route('admin.contactus-messages.update', $contact_us_msg) }}"
                id="contactus_message_edit_form" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $contact_us_msg->id }}">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.name'):</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ $contact_us_msg->contact_name }}" disabled/>
                            </div>
                            <div class="col-lg-6">
                                <label>* @lang('admin.email'):</label>
                                <input type="text" name="email" class="form-control"
                                    value="{{ $contact_us_msg->contact_email }}" disabled/>
                            </div>
                            <div class="col-lg-12">
                                <label>@lang('admin.message'):</label>
                                <textarea class="form-control" disabled> {{ $contact_us_msg->contact_message }}</textarea>
                            </div>
                            <div class="col-lg-4"></div>
                            <div class="col-lg-4">
                                <label>@lang('admin.status'):</label>
                                <select class="form-control" name="status">
                                    <option value="">@lang( 'admin.status' )</option>
                                    <option value="pending" @if ($contact_us_msg->status == 'pending') selected @endif>Pending</option>
                                    <option value="closed" @if ($contact_us_msg->status == 'closed') selected @endif>Closed</option>
                                </select>
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
    <!--begin::Page Scripts(used by this page)-->
    
    <!--end::Page Scripts-->
@endsection
