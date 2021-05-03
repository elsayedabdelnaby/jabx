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
    <div class="section over-hide height-60 portfolio-background-fullscreen project-parallax-img-1" data-enllax-ratio=".45"
        data-enllax-type="background" style="background-position: center 0px;">
        <div class="background-dark-blue-over-2"></div>
        <div class="hero-center-section">
            <div class="section-1400 mt-xl-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="section text-center">
                                <h1 class="display-1 mb-3 color-light-2">
                                    {{ $product->name }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section
      ================================================== -->
    <div class="section over-hide padding-top-bottom-120">
        <div class="section-1400">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <h5 class="mb-3">
                            Product Info
                        </h5>
                        <p class="lead mb-2">
                            <i>{{ $product->short_description }}.</i>
                        </p>
                        <p class="mb-0">
                            {!! $product->description !!}
                        </p>
                    </div>
                </div>
                <div class="row padding-top-80">
                    <div class="col-12 mt-4">
                        <a href="{{ asset($product->getImagePathAttribute()) }}" data-fancybox="">
                            <div class="gallery-wrap over-hide border-4 img-wrap">
                                <img src="{{ asset($product->getImagePathAttribute()) }}" alt="{{ $product->name }}">
                                <div class="gallery-mask">
                                    <div class="gallery-icon">
                                        <i class="uil uil-plus size-22 color-white"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- section
      ================================================== -->
    {{-- <div class="section over-hide padding-bottom-120">
        <div class="section-1400">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 text-center mb-5">
                        <h2 class="mb-0">
                            Related <span class="font-weight-600">products<span class="color-primary">.</span></span>
                        </h2>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="portfolio-wrap-columns img-wrap text-center">
                            <div class="section border-4 over-hide">
                                <img src="img/project-20.jpg" alt="">
                                <div class="wrap-mask-black"></div>
                                <div class="portfolio-wrap-center-section text-center">
                                    <a href="img/project-20.jpg" data-fancybox="" class="btn btn-portfolio-icon mx-1"><i
                                            class="uil uil-plus size-16"></i></a>
                                    <a href="project-4.html" class="btn btn-portfolio-icon animsition-link mx-1"><i
                                            class="uil uil-ellipsis-h size-16"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1"><a href="project-4.html" class="link-heading animsition-link">Mobil</a>
                            </h5>
                            <p class="mb-0">
                                branding, graphic design
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4 mt-sm-0">
                        <div class="portfolio-wrap-columns img-wrap text-center">
                            <div class="section border-4 over-hide">
                                <img src="img/project-17.jpg" alt="">
                                <div class="wrap-mask-black"></div>
                                <div class="portfolio-wrap-center-section text-center">
                                    <a href="img/project-17.jpg" data-fancybox="" class="btn btn-portfolio-icon mx-1"><i
                                            class="uil uil-plus size-16"></i></a>
                                    <a href="project-1.html" class="btn btn-portfolio-icon animsition-link mx-1"><i
                                            class="uil uil-ellipsis-h size-16"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1"><a href="project-1.html" class="link-heading animsition-link">House
                                    212</a></h5>
                            <p class="mb-0">
                                branding, art direction
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                        <div class="portfolio-wrap-columns img-wrap text-center">
                            <div class="section border-4 over-hide">
                                <img src="img/project-21.jpg" alt="">
                                <div class="wrap-mask-black"></div>
                                <div class="portfolio-wrap-center-section text-center">
                                    <a href="img/project-21.jpg" data-fancybox="" class="btn btn-portfolio-icon mx-1"><i
                                            class="uil uil-plus size-16"></i></a>
                                    <a href="project-3.html" class="btn btn-portfolio-icon animsition-link mx-1"><i
                                            class="uil uil-ellipsis-h size-16"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1"><a href="project-3.html" class="link-heading animsition-link">Faroe
                                    Islands</a></h5>
                            <p class="mb-0">
                                branding
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mt-4 mt-lg-0">
                        <div class="portfolio-wrap-columns img-wrap text-center">
                            <div class="section border-4 over-hide">
                                <img src="img/project-15.jpg" alt="">
                                <div class="wrap-mask-black"></div>
                                <div class="portfolio-wrap-center-section text-center">
                                    <a href="https://vimeo.com/333837997" data-fancybox="" data-ratio="2"
                                        class="btn btn-portfolio-icon mx-1"><i class="uil uil-play size-16"></i></a>
                                    <a href="project-2.html" class="btn btn-portfolio-icon animsition-link mx-1"><i
                                            class="uil uil-ellipsis-h size-16"></i></a>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-1"><a href="project-2.html" class="link-heading animsition-link">The
                                    Curve</a></h5>
                            <p class="mb-0">
                                art direction, illustration
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
