<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="{{ config('app.description') }}">
    <meta name="author" content="{{ config('app.author') }}">
    <title>@yield('title') - {{ config('app.name')  }}</title>

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('saas/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('saas/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('saas/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('saas/assets/css/argon.css?v=1.0.0') }}" rel="stylesheet">
    <!-- Docs CSS -->
    <link type="text/css" href="{{ asset('saas/assets/css/saas.css?v=1.0.0') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('saas/payment-webfont-0.9.5/style.css') }}" rel="stylesheet">

    <script>
        // rename myToken as you like
        window.csrfToken =  "{{ csrf_token() }}";
    </script>

    @if(setting('site.google_analytics_tracking_id') != '')
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{setting('site.google_analytics_tracking_id')}}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{setting('site.google_analytics_tracking_id')}}');
        </script>
    @endif


</head>
<body>
<div id="app">
    @include ('layouts.partials._navigation')


    <main>

        <div class="container">
            @include('flash::message')
        </div>


        @yield('content')
    </main>

    @include ('layouts.partials._footer')
</div>

    @include('layouts.partials._footer_scripts')


@stack('scripts')
@yield('scripts')

@if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
        //]]>
    </script>
@endif
</body>
</html>
