@extends('layouts.app')
@section('pageTitle', 'Wedstrijden')
@section('content')
    <div class="main-container">
        <div class="flex flex-col sm:flex-row sm:items-center">
            <h1>
                Wedstrijden
            </h1>
            <div class="sm:ml-4 mt-4 sm:mt-0">
                <a href="/wedstrijden/new" class="c-button c-button__blue">
                    Nieuwe wedstrijd
                </a>
            </div>
            <form method="GET" action="/wedstrijden" class="sm:ml-4 flex mt-4 sm:mt-0 items-center">
                <select name="competitie" class="c-form__input-float">
                    @foreach($competities as $competitie)
                        <option value="{{ $competitie }}"
                            {{ request()->input('competitie') === $competitie ? 'selected' : '' }}>{{ $competitie }}</option>
                    @endforeach
                </select>
                <input type="submit" class="c-button__blue c-button ml-4" value="Filter toepassen"/>
            </form>
        </div>
        @if(session('success'))
            <p class="text-green-400">
                {{ session('success') }}
            </p>
        @endif
        <div class="mt-4 grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 gap-4">
            @foreach($wedstrijden as $wedstrijd)
                <x-wedstrijd.card
                    :item="$wedstrijd"
                ></x-wedstrijd.card>
            @endforeach
        </div>
        {{ $wedstrijden->links() }}
    </div>
@endsection
