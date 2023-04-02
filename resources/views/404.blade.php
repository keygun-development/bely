@extends('layouts.app')
@section('pageTitle', '404')
@section('content')
    <div class="flex flex-col items-center justify-center mt-12">
        <h1 class="text-6xl font-bold text-gray-900 mb-2">404</h1>
        <p class="text-lg text-gray-700 mb-8">Oeps! Deze pagina bestaat niet.</p>
        <a href="/" class="c-button c-button__blue">Ga terug naar home</a>
    </div>
@endsection
