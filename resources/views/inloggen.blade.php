@extends('layouts.guest')
@section('pageTitle', 'Inloggen')
@section('content')
    <div class="container">
        <div class="flex justify-center items-center h-screen flex-col">
            <h1>
                Inloggen Tao
            </h1>
            <form method="POST" action="/inloggen/post" class="c-card mt-4 md:w-3/12">
                @csrf
                <div>
                    <p>
                        Pincode
                    </p>
                    <input type="hidden" name="email" value="info@tao.nl" class="c-form__input-float"/>
                    <input type="password" name="key" class="c-form__input-float"/>
                </div>
                @if($errors->any())
                    <div class="text-red-500">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <input value="Inloggen" type="submit" class="c-button c-button__blue mt-4"/>
            </form>
        </div>
    </div>
@endsection
