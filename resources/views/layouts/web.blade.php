<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=279c32c5-14df-4ef0-8105-5eff0a47c9e0" type="text/javascript"></script>

    <!-- Styles -->
    <link href="{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap-4.4.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet">

{{--    <link href="{{ asset('lib/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/web.css') }}" rel="stylesheet">

    <script type="text/javascript">
        window.xsrf_token = "{{csrf_token()}}";
        @if (auth()->check())
            window.user = JSON.parse(atob('{{ base64_encode(json_encode(auth()->user()->toArray())) }}'));
        @endif
    </script>

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

    @yield('dialog')

    <script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-lte/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
{{--    <script src="{{ asset('admin-lte/plugins/moment/locales.min.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('admin-lte/plugins/moment/moment-with-locales.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-lte/plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>

{{--    <script src="{{ asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}" type="text/javascript"></script>

{{--    <script src="{{ asset('admin-lte/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>--}}
{{--    --}}
    <script src="{{ asset('lib/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('lib/tippy-bundle.umd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('admin-lte/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
{{--    <script src="{{ asset('lib/bootstrap-4.4.1/js/bootstrap.min.js') }}" type="text/javascript" defer></script>--}}
    <script src="{{ asset('js/application.js') }}" type="text/javascript"></script>

</body>
</html>
