@extends('layouts.app')
@section('pageTitle', 'Home')
@section('content')
    <div class="main-container">
        <div class="flex">
            <h1>
                Competitie
            </h1>
            <form method="GET" action="/competitie" class="ml-4 flex items-center">
                <select name="competitie" class="c-form__input-float">
                    @foreach($competities as $competitie)
                        <option value="{{ $competitie }}"
                            {{ request()->input('competitie') === $competitie ? 'selected' : '' }}>
                            {{ $competitie }}
                        </option>
                    @endforeach
                </select>
                <input type="submit" value="Filter toepassen" class="c-button c-button__blue ml-4"/>
            </form>
        </div>
        <div class="mt-4">
            <x-scorebord
                :spelers="$spelers"
            ></x-scorebord>
        </div>
    </div>
@endsection
