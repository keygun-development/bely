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
            <div class="w-full">
                <Tiles
                    :players="{{ $users }}"
                    :selected-wij="{{
                  json_encode(array_filter([
                          $wedstrijd->SpelerWij1,
                          $wedstrijd->SpelerWij2 ?? null,
                          $wedstrijd->SpelerWij3 ?? null]))

                  }}"
                    :selected-zij="{{ json_encode(array_filter([$wedstrijd->SpelerZij1,
                          $wedstrijd->SpelerZij2,
                          $wedstrijd->SpelerZij3])) }}"
                ></Tiles>
                <div class="flex md:justify-between flex-col md:flex-row">
                    <div class="md:w-6/12">
                        <div class="md:w-6/12 mt-4">
                            <p>
                                Score wij:
                            </p>
                            <input class="c-form__input-float" type="number" max="13" value="{{ $wedstrijd->ScoreWij }}"
                                   name="scorewij"/>
                        </div>
                    </div>
                    <div class="md:w-6/12">
                        <div class="md:w-6/12 mt-4">
                            <p>
                                Score zij:
                            </p>
                            <input class="c-form__input-float" type="number" max="13" value="{{ $wedstrijd->ScoreZij }}"
                                   name="scorezij"/>
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
                    <input type="submit" class="c-button c-button__blue" value="Aanpassen"/>
                </div>
        </form>
    </div>
@endsection
