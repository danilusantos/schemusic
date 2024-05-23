<!DOCTYPE html>
<html lang="{{ str_replace('-', '_', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Schemusic - Painel Administrativo{{ isset($title) ? ' - ' . $title : '' }}</title>

    @vite('resources/sass/app.scss')

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <!-- Admin Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin-custom.css') }}">

    @yield('styles')

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini sidebar-closed layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        @include('admin.layout.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('admin.layout.menu')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                @include('admin.layout.page-header')
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content" style="display: none">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.layout.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @vite('resources/js/app.js')
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
    <!-- Main -->
    <script src="{{ asset('assets/admin/js/pages/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
