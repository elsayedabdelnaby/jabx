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

        @yield('content')
        
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
