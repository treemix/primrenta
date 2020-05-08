<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->



    <!-- Styles -->
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">
    <link href="{{ asset('css/web-temp.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include("web/components/mobile_top_navbar")

        <header id="header" class="block_header">
            @include("web/components/top_navbar")
        </header>


        <main id="main" class="block_main">
            @yield('content')
        </main>

        <footer id="footer" class="b-footer">
            @include("web/components/footer")
            @yield('footer')
        </footer>

    </div>

    <script src="{{ asset('lib/jquery-3.4.1.min.js') }}" type="text/javascript" defer></script>
    <script src="{{ asset('lib/popper.min.js') }}" type="text/javascript" defer></script>
{{--    <script src="{{ asset('lib/bootstrap-4.4.1/js/bootstrap.min.js') }}" type="text/javascript" defer></script>--}}
    <script src="{{ asset('js/application.js') }}" type="text/javascript" defer></script>

</body>
</html>
