<!DOCTYPE html>
<html lang="{{ str_replace('-', '_', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Schemusic{{ isset($title) ? ' - ' . $title : '' }}</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/site/css/main.css') }}">

    @stack('styles')
</head>

<body>
    <!-- Main Sidebar Container -->
    @include('member.layout.menu')
    @include('member.layout.navbar')

    <!-- Main content -->
    <div class="content p-0" style="display: none">
        @yield('content')
    </div>
    <!-- /.Main content -->

    @include('member.layout.footer')

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('assets/admin/js/pages/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
