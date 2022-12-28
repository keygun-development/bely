@extends('layouts.app')
@section('pageTitle', 'Lid detail')
@section('content')
    <div class="main-container">
        <h1>
            Lid details
        </h1>
        <form method="POST" action="/lid/update" class="mt-4">
            @csrf
            <input type="hidden" value="{{ $lid->id }}" name="id"/>
            <div>
                <p>
                    Voornaam:
                </p>
                <input
                    class="c-form__input-float"
                    type="text"
                    name="voornaam"
                    value="{{ $lid->Voornaam }}"
                />
            </div>
            <div class="mt-4">
                <p>
                    Achternaam:
                </p>
                <input
                    class="c-form__input-float"
                    type="text"
                    name="achternaam"
                    value="{{ $lid->Achternaam }}"
                />
            </div>
            <div class="mt-4">
                <p>
                    Geboortedatum:
                </p>
                <input
                    class="c-form__input-float"
                    type="date"
                    name="datum"
                    value="{{ $lid->Gebdatum }}"
                />
            </div>
            <div class="mt-4">
                <p>
                    Sterkte:
                </p>
                <input
                    class="c-form__input-float"
                    type="number"
                    max="5"
                    name="sterkte"
                    value="{{ $lid->Sterkte }}"
                />
            </div>
            <div class="mt-4">
                <p>
                    Verkortenaam:
                </p>
                <input
                    class="c-form__input-float"
                    type="text"
                    name="verkortenaam"
                    value="{{ $lid->Verkortenaam }}"
                />
            </div>
            @if(session('success'))
                <p class="text-green-400">
                    {{ session('success') }}
                </p>
            @endif
            <div class="mt-4">
                <input type="submit" class="c-button__blue c-button" value="Opslaan"/>
            </div>
        </form>
    </div>
@endsection
