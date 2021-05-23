@extends('layouts.admin.app')

@section('title')
    Admin-subscribers Create
@endsection

@section('subheader')
    @include('admin.subscribers.subheader')
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
            <form class="form" method="POST" action="{{ route('admin.subscribers.store') }}" id="subscriber_create_form"
                enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.email'):</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email"
                                    value="{{ old('email') }}"/>
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
    <script src="{{ asset('assets/admin/js/pages/custom/subscribers/edit-subscribers.js') }} "></script>
    <!--end::Page Scripts-->
@endsection
