@extends('layouts.admin.app')

@section('title')
    Admin-Team Member Edit
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
            <form class="form" method="POST" action="{{ route('admin.team-members.update', $team_member) }}"
                id="team_member_form" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{ $team_member->id }}">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="mb-2">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>* @lang('admin.name'):</label>
                                <input type="text" name="name" class="form-control" placeholder="Name of Team Member"
                                    value="{{ $team_member->name }}" />
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
                                    value="{{ $team_member->title }}" />
                                @error('title')
                                    <div class="fv-plugins-message-container">
                                        <div class="fv-help-block">
                                            {{ $message }}</div>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <label>* @lang('admin.brief'):</label>
                                <input type="text" name="brief" class="form-control"
                                    placeholder="Enter Brief"
                                    value="{{ $team_member->breif }}" />
                                @error('brief')
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
                                    placeholder="Enter Instagram Link" value="{{ $team_member->instagram_link }}" />
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
                                    placeholder="Enter Facebook Link" value="{{ $team_member->facebook_link }}" />
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
                                    placeholder="Enter Twitter Link" value="{{ $team_member->twitter_link }}" />
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
                                    placeholder="Enter LinkedIn Link" value="{{ $team_member->linkedin_link }}" />
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
                                    <div class="image-input-wrapper"
                                        style="background-image: url('{{ asset($team_member->getImagePathAttribute()) }}')">
                                    </div>

                                    <label
                                        class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="change" data-toggle="tooltip" title=""
                                        data-original-title="Change image">
                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                        <input type="file" name="team_member_image" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="image_remove" />
                                    </label>

                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                        data-action="cancel" data-toggle="tooltip" title="Cancel Image">
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
    <script src="{{ asset('assets/admin/js/pages/custom/team_members/edit.js') }} "></script>
    <!--end::Page Scripts-->
@endsection
