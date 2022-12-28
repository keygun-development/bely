@extends('layouts.app')
@section('pageTitle', 'Lid detail')
@section('content')
    <div class="main-container">
        <h1>
            {{ $lid->Voornaam }} {{ $lid->Achternaam }}
        </h1>
    </div>
@endsection
