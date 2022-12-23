@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div class="main-container">
        <h1>
            Laatste wedstrijden
        </h1>
        <div class="mt-4 grid grid-cols-4 gap-4">
            @foreach($wedstrijden as $wedstrijd)
                <x-wedstrijd.card
                    :item="$wedstrijd"
                ></x-wedstrijd.card>
            @endforeach
        </div>
    </div>
@endsection
