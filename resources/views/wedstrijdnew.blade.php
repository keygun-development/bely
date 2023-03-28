@extends('layouts.app')
@section('pageTitle', 'Nieuwe wedstrijd')
@section('content')
    <div class="main-container">
        <h1>
            Nieuwe wedstrijd
        </h1>
        <form method="POST" action="/wedstrijd/create" class="mt-4">
            @csrf
            <div class="w-full">
                <Tiles
                    :players="{{ $users }}"
                ></Tiles>
                <div class="flex md:justify-between flex-col md:flex-row">
                    <div class="md:w-6/12">
                        <div class="md:w-6/12 mt-4">
                            <p>
                                Score wij:
                            </p>
                            <input class="c-form__input-float" type="number" max="13" name="scorewij"/>
                        </div>
                    </div>
                    <div class="md:w-6/12">
                        <div class="md:w-6/12 mt-4">
                            <p>
                                Score zij:
                            </p>
                            <input class="c-form__input-float" type="number" max="13" name="scorezij"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <p>
                    Datum en tijd:
                </p>
                <input
                    type="datetime-local"
                    name="datum"
                    value="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}"
                    class="c-form__input-float"
                />
            </div>
            <div class="mt-4">
                <p>
                    Competitie:
                </p>
                <input
                    type="text"
                    value="{{ \Carbon\Carbon::now()->year }}"
                    name="competitie"
                    class="c-form__input-float"
                />
            </div>
            @if(session('success'))
                <p class="text-green-400">
                    {{ session('success') }}
                </p>
            @endif
            @if($errors->any())
                <div class="text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mt-4">
                <input type="submit" class="c-button c-button__blue" value="Aanmaken"/>
            </div>
        </form>
    </div>
@endsection
