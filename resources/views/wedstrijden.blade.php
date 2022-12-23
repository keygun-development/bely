@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div class="main-container">
        <div class="flex">
            <h1>
                Wedstrijden
            </h1>
            <a class="c-button c-button__blue ml-4">
                Nieuwe wedstrijd
            </a>
            <form method="GET" action="/wedstrijden" class="ml-4 flex items-center">
                <select name="competitie" class="c-form__input-float">
                    @foreach($competities as $competitie)
                        <option value="{{ $competitie }}"
                            {{ request()->input('competitie') === $competitie ? 'selected' : '' }}>{{ $competitie }}</option>
                    @endforeach
                </select>
                <input type="submit" class="c-button__blue c-button ml-4" value="Filter toepassen" />
            </form>
        </div>
        <div class="mt-4 grid grid-cols-4 gap-4">
            @foreach($wedstrijden as $wedstrijd)
                <x-wedstrijd.card
                    :item="$wedstrijd"
                ></x-wedstrijd.card>
            @endforeach
        </div>
        {{ $wedstrijden->links() }}
    </div>
@endsection
