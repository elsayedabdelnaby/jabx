@extends('layouts.front.app')

@section('meta')
    @include('front.partials.meta', [
    'title' => $site_settings->meta_title,
    'keywords' => $site_settings->meta_keywords,
    'description' => $site_settings->meta_description,
    'image' => $site_settings->getLogoPathAttribute()
    ])
@endsection

@section('content')
    <!-- Hero
          ================================================== -->

    <div class="section over-hide padding-top-120 padding-top-mob-nav z-bigger section-background-24">
        <div class="section-1400 pt-xl-4">
            <div class="container-fluid padding-top-bottom-80">
                <div class="row">
                    <div class="col-lg">
                        <h2 class="display-8 mb-3">
                            Contact
                        </h2>
                        <p class="lead mb-0 title-text-left-line-small">
                            Get in touch
                        </p>
                    </div>
                    <div class="col-lg-auto align-self-center mt-4 mt-lg-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb no-border">
                                <li class="breadcrumb-item"><a href="{{ URL('/') }}"
                                        class="link link-dark-primary size-14" data-hover="Home">Home</a></li>
                                <li class="breadcrumb-item active font-weight-500" aria-current="page"><span
                                        class="size-14">Contact</span></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="section padding-bottom-120">
            <div class="section-1400">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <form id="contact-us-form">
                                <input type="hidden" id="contact-us-store" value="{{ route('contact-us.store') }}">
                                <div class="row justify-content-center px-1">
                                    <p id="subscribe-message"></p>
                                    <div class="clearfix w-100"></div>
                                    <div class="col-md-6 mt-3 px-2">
                                        <div class="form-group">
                                            <input type="text" id="contactname" name="contactname"
                                                class="form-style big form-style-with-icon section-shadow-blue"
                                                placeholder="Full Name" id="contactname" autocomplete="off" required>
                                            <i class="input-icon big uil uil-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3 px-2">
                                        <div class="form-group">
                                            <input type="email" id="contactemail" name="contactemail"
                                                class="form-style big form-style-with-icon section-shadow-blue"
                                                placeholder="Your Email" id="contactemail" autocomplete="off" required>
                                            <i class="input-icon big uil uil-at"></i>
                                        </div>
                                    </div>
                                    <div class="clearfix w-100"></div>
                                    <div class="col-12 mt-3 px-2">
                                        <div class="form-group">
                                            <textarea id="contactmessage" name="contactmessage"
                                                class="form-style big form-style-with-icon form-textarea section-shadow-blue"
                                                placeholder="Message" autocomplete="off"
                                                rows="5" required></textarea>
                                            <i class="input-icon big uil uil-comment-alt-lines"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center text-xl-left pt-4 px-2">
                                        <p id="contact-message-feedback"></p>
                                        <button type="button" class="btn btn-dark-primary submit-contactus">Send
                                            message<i class="uil uil-arrow-right size-22 ml-3"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-8 col-lg-7 col-xl-6 mt-5 mt-xl-0">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div
                                        class="section over-hide border-4 text-center bg-white px-3 px-lg-4 py-5 landing-shadow-4">
                                        <h5 class="mb-4">Contact</h5>
                                        <a href="" class="link size-18 mb-1"
                                            data-hover="{{ $contact_us_data->phone_1 }}">{{ $contact_us_data->phone_1 }}</a>
                                        <div class="clearfix w-100"></div>
                                        <a href="" class="link size-18 mb-1"
                                            data-hover="{{ $contact_us_data->phone_2 }}">{{ $contact_us_data->phone_2 }}</a>
                                        <div class="clearfix w-100"></div>
                                        <a href="" class="link size-18 link-primary mb-4"
                                            data-hover="{{ $contact_us_data->email }}">{{ $contact_us_data->email }}</a>
                                        <div class="clearfix w-100"></div>
                                        @if (!empty($contact_us_data->twitter_link))
                                            <a href="{{ $contact_us_data->twitter_link }}"
                                                class="link link-gray-primary link-normal mx-2"><i
                                                    class="uil uil-twitter size-22"></i></a>
                                        @endif
                                        @if (!empty($contact_us_data->facebook_link))
                                        <a href="{{ $contact_us_data->facebook_link }}"
                                            class="link link-gray-primary link-normal mx-2"><i
                                                class="uil uil-facebook-messenger size-22"></i></a>
                                        @endif
                                        @if (!empty($contact_us_data->instagram_link))
                                        <a href="{{ $contact_us_data->instagram_link }}"
                                            class="link link-gray-primary link-normal mx-2"><i
                                                class="uil uil-instagram size-22"></i></a>
                                        @endif
                                        @if (!empty($contact_us_data->linkedin_link))
                                        <a href="{{ $contact_us_data->linkedin_link }}"
                                            class="link link-gray-primary link-normal mx-2"><i
                                                class="uil uil-linkedin size-22"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="{{ asset('assets/admin/plugins/global/plugins.bundle.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/admin/js/pages/custom/contact_us/contact-us.js') }}">
    </script>
@endpush
