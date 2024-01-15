<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kreasi Swala Nusantara</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="icon" href="{{ asset('assets/logo.png') }}" sizes="32x32" type="image/png">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @stack('css')

    <style>
        .h100vh {
            height: 100vh;
        }

        .h50 {
            height: 80vh;
        }
        </style>

</head>
<body>
    @include('partials.navbar')
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
