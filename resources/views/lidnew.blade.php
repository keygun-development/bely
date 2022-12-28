@extends('layouts.app')
@section('pageTitle', 'Nieuw lid')
@section('content')
    <div class="main-container">
        <h1>
            Nieuw lid
        </h1>
        <form method="POST" action="/lid/create" class="mt-4">
            @csrf
            <input type="hidden" name="id"/>
            <div>
                <p>
                    Voornaam:
                </p>
                <input
                    class="c-form__input-float"
                    type="text"
                    name="voornaam"
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
