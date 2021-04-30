<meta name="title" content="{{ $title }}" />
<meta name="keywords" content="{{ $keywords }}" />
<meta name="description" content="{{ $description }}" />
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="{{ $title }}" />
<meta itemprop="image" content="{{ asset($image) }}">
<meta itemprop="description" content="{{ $description }}" />
<!-- Twitter Card data -->
<meta name='twitter:app:country' content='EG' />
<meta name="twitter:site" content="@{{ $title }}" />
<meta name="twitter:creator" content="@Sayed-Elaraby" />
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:image" content="{{ asset($image) }}">
<meta name="twitter:description" content="{{ $description }}" />
<!-- Open Graph data -->
<meta property="og:type" content="article" />
<meta property="og:site_name" content="{{ $title }}">
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:image" content="{{ asset($image) }}">
<meta property="og:description" content="{{ $description }}" />


<!-- Mobile Specific Metas
 ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="theme-color" content="#212121" />
<meta name="msapplication-navbutton-color" content="#212121" />
<meta name="apple-mobile-web-app-status-bar-style" content="#212121" />
