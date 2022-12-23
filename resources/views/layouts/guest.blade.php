<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle') - Tik 'm aan</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
<div class="relative min-h-screen">
    <div class="site-content" id="app">
        @yield('content')
    </div>
</div>
@vite(['resources/js/app.js'])
</body>
