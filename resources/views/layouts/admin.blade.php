<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('admin-lte/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/fonts/SourceSansPro/SourceSansPro.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/fonts/ionicons/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/grapesjs/css/grapes.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-lte/css/style.css') }}" rel="stylesheet">

    @yield('stylesheet')

    <script type="text/javascript">
        window.xsrf_token = "{{csrf_token()}}";
        @if (auth()->check())
            window.user = JSON.parse(atob('{{ base64_encode(json_encode(auth()->user()->toArray())) }}'));
        @endif
    </script>

</head>
<body class="sidebar-mini">
<div id="app" class="wrapper">

    @include("admin/components/main/header")

    @include("admin/components/main/sidebar")

    <div class="content-wrapper">

        <div class="container-fluid" style="padding-top: 30px;">
            <div class="row">
                <div class="col-lg-12">
                    @if (session('success'))
                        <div class="info-box info-box-success bg-success">
                            <span class="info-box-icon"><i class="fas fa-exclamation-triangle"></i></span>
                            <div class="info-box-content">
                                <ul class="info-box-error-list" style="padding-top: 15px;">
                                    <li>{{ session('success') }}</li>
                                </ul>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="info-box bg-danger">
                            <span class="info-box-icon"><i class="fas fa-exclamation-triangle"></i></span>
                            <div class="info-box-content">
                                <ul class="info-box-error-list">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    @endif
                </div>
            </div>
        </div>

        @yield('content')

    </div>

    @include("admin/components/control/sidebar")

    <footer class="main-footer"> </footer>
    <div id="sidebar-overlay"></div>
</div>

<script src="{{ asset('admin-lte/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/plugins/datatables/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/grapesjs/grapes.min.js') }}"></script>

<script src="{{ asset('admin-lte/js/adminlte.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin-lte/js/application.js') }}" type="text/javascript"></script>

@yield('script')

</body>
</html>
