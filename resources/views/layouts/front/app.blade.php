<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- CSS
 ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/unicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/animsition.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/lighbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/tooltip.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}" />

    <!-- Favicons
 ================================================== -->
    <link rel="icon" type="image/png" href="{{ $site_settings->getFaviconPathAttribute() }}">
    <link rel="apple-touch-icon" href="{{ asset('uploads/images/site_settings/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ asset('uploads/images/site_settings/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('uploads/images/site_settings/apple-touch-icon-114x114.png') }}">
</head>

<body class="triger-anime">
    <div class="animsition">
        @include('front.partials.header')

        <div class="section over-hide">
            <div class="section over-hide padding-top-120 pb-5 bg-dark-blue section-background-niche-18">
                <div class="section-1400 pt-xl-4">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-8 col-sm-6 col-md-4 col-xl-3 pr-xl-5">
                                <div class="section load-anime-left">
                                    <div
                                        class="section swiper-landing-v2 pb-4 swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                                        <div class="swiper-wrapper" style="transition-duration: 500ms;">
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                                                data-swiper-slide-index="2"
                                                style="width: 251px; transition-duration: 500ms; opacity: 0; transform: translate3d(0px, 0px, 0px);">
                                                <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                    <img src="img/landing-3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-duplicate-active"
                                                data-swiper-slide-index="0"
                                                style="width: 251px; transition-duration: 500ms; opacity: 0; transform: translate3d(-251px, 0px, 0px);">
                                                <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                    <img src="img/landing-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide" data-swiper-slide-index="1"
                                                style="width: 251px; transition-duration: 500ms; opacity: 0; transform: translate3d(-502px, 0px, 0px);">
                                                <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                    <img src="img/landing-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                                                data-swiper-slide-index="2"
                                                style="width: 251px; transition-duration: 500ms; opacity: 0; transform: translate3d(-753px, 0px, 0px);">
                                                <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                    <img src="img/landing-3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-active"
                                                data-swiper-slide-index="0"
                                                style="width: 251px; transition-duration: 500ms; opacity: 1; transform: translate3d(-1004px, 0px, 0px);">
                                                <div class="section img-wrap landing-shadow-1 border-radius-landing-1">
                                                    <img src="img/landing-1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                            <span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                                tabindex="0" role="button" aria-label="Go to slide 1"></span><span
                                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                                aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                                tabindex="0" role="button" aria-label="Go to slide 3"></span>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
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
                                        <div class="col-auto">
                                            <a href="#page-section" class="btn btn-primary" data-gal="m_PageScroll2id">
                                                Discover more
                                            </a>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <a href="#page-section" class="link link-light-primary-2 link-normal"
                                                data-gal="m_PageScroll2id">
                                                Get Started
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- JAVASCRIPT
    ================================================== -->
    <script src="{{ asset('assets/front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
    <!-- End Document
================================================== -->
    <!-- Code injected by live-server -->
    <script type="text/javascript">
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function() {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                            "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                                .valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function(msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        } else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
        // ]]>

    </script>

</body>

</html>
