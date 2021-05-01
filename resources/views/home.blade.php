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
    <div class="section over-hide">
        <div class="section over-hide padding-top-120 pb-5 bg-dark-blue section-background-niche-18">
            <div class="section-1400 pt-xl-4">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-8 col-sm-6 col-md-4 col-xl-3 pr-xl-5">
                            <div class="section load-anime-left">
                                <div
                                    class="section swiper-landing-v2 pb-4 swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                            data-swiper-slide-index="2"
                                            style="width: 251px; opacity: 0; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                                            <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                <img src="{{ asset('uploads/images/sliders/landing-3.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0"
                                            style="width: 251px; opacity: 0; transform: translate3d(-251px, 0px, 0px); transition-duration: 0ms;">
                                            <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                <img src="{{ asset('uploads/images/sliders/landing-1.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1"
                                            style="width: 251px; opacity: 1; transform: translate3d(-502px, 0px, 0px); transition-duration: 0ms;">
                                            <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                <img src="{{ asset('uploads/images/sliders/landing-2.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2"
                                            style="width: 251px; opacity: 0; transform: translate3d(-753px, 0px, 0px); transition-duration: 0ms;">
                                            <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                <img src="{{ asset('uploads/images/sliders/landing-3.png') }}" alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                            data-swiper-slide-index="0"
                                            style="width: 251px; opacity: 0; transform: translate3d(-1004px, 0px, 0px); transition-duration: 0ms;">
                                            <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                <img src="{{ asset('uploads/images/sliders/landing-1.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                        <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                            aria-label="Go to slide 1"></span><span
                                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                            role="button" aria-label="Go to slide 2"></span><span
                                            class="swiper-pagination-bullet" tabindex="0" role="button"
                                            aria-label="Go to slide 3"></span>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-md-auto align-self-center pl-xl-5 order-first order-md-last mb-5 mb-md-0 text-center text-md-left">
                            <div class="section load-anime-right">
                                <h6 class="mb-3 color-light-2 text-uppercase">
                                    introducing
                                </h6>
                                <h5 class="display-6 mb-5 color-white">
                                    Landing page for<br>mobile apps
                                </h5>
                                <div class="row justify-content-center justify-content-md-start">
                                    {{-- <div class="col-auto">
                                        <a href="#page-section" class="btn btn-primary" data-gal="m_PageScroll2id">
                                            Discover more
                                        </a>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <a href="#page-section"
                                            class="link link-light-primary-2 link-normal _mPS2id-h mPS2id-highlight mPS2id-highlight-first"
                                            data-gal="m_PageScroll2id">
                                            Get Started
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Services section
      ================================================== -->
    <div class="section over-hide padding-bottom-120 bg-light-2 section-background-13">
        <div class="section-1400">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center padding-bottom-80">
                        <h6 class="color-primary text-uppercase mb-1">
                            features
                        </h6>
                        <h3 class="display-8 mb-3 text-center color-gray-dark">
                            Amazing features
                        </h3>
                        <p class="lead mb-0">
                            Discover our amazing features.
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="section">
                            <div class="row justify-content-center">
                                <div class="col-sm-6 col-lg-4 mt-0 mt-lg-4 mt-xl-5">
                                    <p>
                                        <div class="section border-4 services-wrap-3 no-back-img p-4"
                                            data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s"
                                            data-scroll-reveal-id="1" data-scroll-reveal-initialized="true"
                                            data-scroll-reveal-complete="true">
                                            <h6 class="mb-3 mb-lg-5">
                                                Startups<br>app
                                            </h6>
                                            <p class="mb-0 text-right"><i class="uil uil-ninja size-40"></i></p>
                                        </div>
                                    </p>
                                </div>
                                <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0">
                                    <p>
                                        <div class="section border-4 services-wrap-3 p-4"
                                            data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s"
                                            data-scroll-reveal-id="3" data-scroll-reveal-initialized="true"
                                            data-scroll-reveal-complete="true">
                                            <h6 class="mb-3 mb-lg-5 pb-lg-2">
                                                Games<br>app
                                            </h6>
                                            <p class="mb-0 text-right"><i class="uil uil-game size-40"></i></p>
                                        </div>
                                    </p>
                                </div>
                                <div class="col-lg-4 mt-0 mt-lg-4 mt-xl-5">
                                    <div class="row justify-content-lg-start">
                                        <div class="col-sm-6 col-lg-12 mt-4 mt-lg-0">
                                            <p>
                                                <div class="section border-4 services-wrap-3 p-4"
                                                    data-scroll-reveal="enter bottom move 40px over 0.5s after 0.3s"
                                                    data-scroll-reveal-id="5" data-scroll-reveal-initialized="true"
                                                    data-scroll-reveal-complete="true">
                                                    <h6 class="mb-3 mb-lg-5">
                                                        eCommerce<br>ready
                                                    </h6>
                                                    <p class="mb-0 text-right"><i
                                                            class="uil uil-shopping-basket size-40"></i></p>
                                                </div>
                                            </p>
                                        </div>
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
