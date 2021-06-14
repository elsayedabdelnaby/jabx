@extends('layouts.front.app')

@section('meta')
    @include('front.partials.meta', [
    'title' => $aboutus->meta_title,
    'keywords' => $aboutus->meta_keywords,
    'description' => $aboutus->meta_description,
    'image' => $site_settings->getLogoPathAttribute()
    ])
@endsection

@section('css')
    <style>
        .corporate-hero-back-img-5{
            background-image: url({{asset($aboutus->getBannerPathAttribute())}});
        }
    </style>
@endsection

@section('content')
    <div class="section over-hide padding-top-120 padding-top-mob-nav">
        <div class="top-header-parallax-section corporate-hero-back-img-5 parallax-hero-1200" style="top: 0px;"></div>
        <div class="section-1400 z-bigger">
            <div class="container-fluid padding-top-bottom-80">
                <div class="row">
                    <div class="col-lg">
                        <h2 class="display-8 mb-3 color-white">
                            About Us
                        </h2>
                        <p class="lead mb-0 color-white title-text-left-line-small">
                            Everything you need to know about our Company
                        </p>
                    </div>
                    <div class="col-lg-auto align-self-center mt-4 mt-lg-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb no-border">
                                <li class="breadcrumb-item light"><a href="{{ route('home') }}"
                                        class="link link-light-primary size-14" data-hover="Home">Home</a></li>
                                <li class="breadcrumb-item light active font-weight-500 color-white" aria-current="page">
                                    <span class="size-14">About Us</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section over-hide padding-top-bottom-120 bg-white">
        <div class="section-1400">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-lg-4 text-center services-wrap-1"
                        data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s" data-scroll-reveal-id="1"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="section bg-white py-5 px-4 services-shadow-primary">
                            <div class="section-box-icon m-auto bg-primary"><i
                                    class="uil uil-ruler size-28 color-white"></i></div>
                            <h5 class="mb-3 mt-3">
                                Our Mission
                            </h5>
                            <p class="mb-0">
                                {{ $aboutus->ourmission }}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center services-wrap-1 mt-4 mt-sm-0"
                        data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s" data-scroll-reveal-id="2"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="section bg-white py-5 px-4 services-shadow-primary">
                            <div class="section-box-icon m-auto bg-primary"><i
                                    class="uil uil-palette size-28 color-white"></i></div>
                            <h5 class="mb-3 mt-3">
                                Why Choose Us
                            </h5>
                            <p class="mb-0">
                                {{ $aboutus->why_choose_us }}
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 text-center services-wrap-1 mt-4 mt-lg-0"
                        data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s" data-scroll-reveal-id="3"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <div class="section bg-white py-5 px-4 services-shadow-primary">
                            <div class="section-box-icon m-auto bg-primary"><i
                                    class="uil uil-brush-alt size-28 color-white"></i></div>
                            <h5 class="mb-3 mt-3">
                                What We Do
                            </h5>
                            <p class="mb-0">
                                {{ $aboutus->what_we_do }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section over-hide padding-top-bottom-120">
        <div class="section-1400">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6 pr-xl-4 img-wrap align-self-center"
                        data-scroll-reveal="enter left move 40px over 0.5s after 0.3s" data-scroll-reveal-id="4"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <img class="border-4" src="{{ asset($aboutus->getMainSectionImagePathAttribute()) }}"
                            alt="{{ $aboutus->main_section_title }}">
                    </div>
                    <div class="col-sm-10 col-md-8 col-lg-6 pl-xl-5 align-self-center mt-5 mt-lg-0"
                        data-scroll-reveal="enter right move 40px over 0.5s after 0.3s" data-scroll-reveal-id="5"
                        data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <h3 class="mb-4">
                            {{ Str::substr($aboutus->main_section_title, 0, 28) }}<br
                                class="d-none d-sm-inline">{{ Str::substr($aboutus->main_section_title, 29) }}
                        </h3>
                        <p class="lead mb-5">
                            {{ $aboutus->main_section_description }}
                        </p>
                        <div class="row">
                            <div class="col-auto">
                                <div class="h4 mb-1"><span class="counter">{{ $aboutus->projects_number }}</span>+</div>
                                <h5 class="mb-0 color-gray">
                                    Projects
                                </h5>
                            </div>
                            <div class="col-auto pl-xl-5">
                                <div class="h4 mb-1"><span class="counter">{{ $aboutus->users_number }}</span></div>
                                <h5 class="mb-0 color-gray">
                                    Users
                                </h5>
                            </div>
                            <div class="col-auto pl-xl-5">
                                <div class="h4 mb-1"><span class="counter">{{ $aboutus->awards_number }}</span></div>
                                <h5 class="mb-0 color-gray">
                                    Awards
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section over-hide padding-top-bottom bg-black">
        <div class="section-1400">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 over-hide">
                        <div class="section swiper-logos swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper"
                                style="transform: translate3d(-1635px, 0px, 0px); transition-duration: 500ms;">
                                @forelse ($sponsors as $sponsor)
                                    <div class="swiper-slide" data-swiper-slide-index="{{ asset($sponsor->id) }}"
                                        style="width: 318.25px;">
                                        <div class="section logos-wrap-1 text-center margin-auto">
                                            <img src="{{ asset($sponsor->logo_path) }}" alt="{{ $sponsor->name }}">
                                        </div>
                                    </div>
                                @empty

                                @endforelse
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
