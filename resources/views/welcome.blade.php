@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div class="main-container">
        <h1>
            Laatste wedstrijden
        </h1>
        <div class="mt-4 grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
            @foreach($wedstrijden as $wedstrijd)
                <x-wedstrijd.card
                    :item="$wedstrijd"
                ></x-wedstrijd.card>
            @endforeach
        </div>
        <div class="mt-4">
            <h2 class="text-3xl">
                Scorebord
            </h2>
            <div class="mt-4 overflow-x-auto">
                <x-scorebord
                    :spelers="$spelers"
                ></x-scorebord>
            </div>
        </div>
    </div>
@endsection
