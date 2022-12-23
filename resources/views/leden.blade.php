@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div class="main-container">
        <div class="flex">
            <h1>
                Leden
            </h1>
            <a class="c-button c-button__blue ml-4">
                Nieuw lid
            </a>
        </div>
        <div class="mt-4 grid grid-cols-4 gap-4">
            @foreach($leden as $lid)
                <x-lid.card
                    :item="$lid"
                ></x-lid.card>
            @endforeach
        </div>
    </div>
@endsection
