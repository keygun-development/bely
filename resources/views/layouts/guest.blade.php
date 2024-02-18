<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - Tik 'm aan</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="relative min-h-screen">
    <div class="site-content" id="app">
        @yield('content')
    </div>
</div>
</body>
