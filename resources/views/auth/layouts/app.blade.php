<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/member/css/main.css') }}">

    <!-- Scripts -->
    @vite('resources/js/app.js')
</head>

<body>
    <div id="app">
        @if (str_contains(session()->get('url.intended'), 'member'))
            <main class="background-secondary min-vh-100 d-flex justify-content-center align-items-center">
                @yield('content')
            </main>
        @else
            <div class="background-primary row mx-auto min-vh-100">
                <aside class="col-xl-8 col-md-6 col-12 p-0 d-sm-block d-none overflow-hidden">
                    <img class="object-fit-cover w-100 h-100" src="{{ asset('assets/site/img/show-2.jpg') }}"
                        alt="Fundo Administrativo">
                </aside>

                <main class="background-dark col-xl-4 col-md-6 justify-items-center align-items-center d-flex"
                    style="box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, .25) inset;">
                    @yield('content')
                </main>
            </div>
        @endif
    </div>
</body>

</html>
