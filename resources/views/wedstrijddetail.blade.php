@extends('layouts.app')
@section('pageTitle', 'Wedstrijd detail')
@section('content')
    <div class="main-container">
        <h1>
            Wedstrijd details
        </h1>
        <form method="POST" action="/wedstrijd/update" class="mt-4">
            @csrf
            <input type="hidden" name="id" value="{{ $wedstrijd->id }}"/>
            <div class="flex justify-between">
                <div class="w-6/12">
                    <div class="w-6/12">
                        <p>
                            Speler wij 1:
                        </p>
                        <select class="c-form__input-float" name="speler1">
                            @foreach($users as $user)
                                <option
                                    {{ $user->id === $wedstrijd->SpelerWij1 ? 'selected' : '' }}
                                    value="{{ $user->id }}">
                                    {{ $user->Verkortenaam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-6/12 mt-4">
                        <p>
                            Speler wij 2:
                        </p>
                        <select class="c-form__input-float" name="speler2">
                            @foreach($users as $user)
                                <option
                                    {{ $user->id === $wedstrijd->SpelerWij2 ? 'selected' : '' }}
                                    value="{{ $user->id }}">
                                    {{ $user->Verkortenaam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-6/12 mt-4">
                        <p>
                            Speler wij 3:
                        </p>
                        <select class="c-form__input-float" name="speler3">
                            @foreach($users as $user)
                                <option
                                    {{ $user->id === $wedstrijd->SpelerWij3 ? 'selected' : '' }}
                                    value="{{ $user->id }}">
                                    {{ $user->Verkortenaam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-6/12 mt-4">
                        <p>
                            Score wij:
                        </p>
                        <input class="c-form__input-float" type="number" max="13" value="{{ $wedstrijd->ScoreWij }}" name="scorewij" />
                    </div>
                </div>
                <div class="w-6/12">
                    <div class="w-6/12">
                        <p>
                            Speler zij 1:
                        </p>
                        <select class="c-form__input-float" name="speler4">
                            @foreach($users as $user)
                                <option
                                    {{ $user->id === $wedstrijd->SpelerZij1 ? 'selected' : '' }}
                                    value="{{ $user->id }}">
                                    {{ $user->Verkortenaam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-6/12 mt-4">
                        <p>
                            Speler zij 2:
                        </p>
                        <select class="c-form__input-float" name="speler5">
                            @foreach($users as $user)
                                <option
                                    {{ $user->id === $wedstrijd->SpelerZij2 ? 'selected' : '' }}
                                    value="{{ $user->id }}">
                                    {{ $user->Verkortenaam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-6/12 mt-4">
                        <p>
                            Speler zij 3:
                        </p>
                        <select class="c-form__input-float" name="speler6">
                            @foreach($users as $user)
                                <option
                                    {{ $user->id === $wedstrijd->SpelerZij3 ? 'selected' : '' }}
                                    value="{{ $user->id }}">
                                    {{ $user->Verkortenaam }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-6/12 mt-4">
                        <p>
                            Score zij:
                        </p>
                        <input class="c-form__input-float" type="number" max="13" value="{{ $wedstrijd->ScoreZij }}" name="scorezij" />
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <p>
                    Datum en tijd:
                </p>
                <input
                    type="datetime-local"
                    value="{{ \Carbon\Carbon::create($wedstrijd->Datum)->format('Y-m-d\TH:i') }}"
                    name="datum"
                    class="c-form__input-float"
                />
            </div>
            <div class="mt-4">
                <p>
                    Competitie:
                </p>
                <input
                    type="text"
                    value="{{ $wedstrijd->Competitie }}"
                    name="competitie"
                    class="c-form__input-float"
                />
            </div>
            @if(session('success'))
                <p class="text-green-400">
                    {{ session('success') }}
                </p>
            @endif
            <div class="mt-4">
                <input type="submit" class="c-button c-button__blue" value="Aanpassen"/>
            </div>
        </form>
    </div>
@endsection
