@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div class="main-container">
        <div class="flex">
            <h1>
                Leden
            </h1>
            <a href="/lid/new" class="c-button c-button__blue ml-4">
                Nieuw lid
            </a>
        </div>
        @if(session('success'))
            <p class="text-green-400">
                {{ session('success') }}
            </p>
        @endif
        <div class="mt-4 grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
            @foreach($leden as $lid)
                <x-lid.card
                    :item="$lid"
                ></x-lid.card>
            @endforeach
        </div>
    </div>
@endsection
