<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    meta:
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="your tags" />
    <meta name="description" content="150 words" />
    <meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta http-equiv="Cache-Control" content="no-cache">
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Schemusic{{ isset($title) ? ' - ' . $title : '' }}</title>

    @yield('styles')
</head>

<body>
    @yield('content')

    @yield('scripts')
</body>

</html>
