<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - {{ __('web.slogan') }}</title>

    <link rel="stylesheet" href="{{ mix('build/app.css') }}">
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

    @yield('styles')
</head>
<body>

    @include('layouts.header')

    @yield('content')

    <script src="{{ mix('build/app.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js"></script>
    @yield('scripts')
</body>
</html>
