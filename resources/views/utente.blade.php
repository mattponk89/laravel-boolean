@extends('layouts.layout')

@section('main')
<main>
    <div class="container">
        <h1>
            DETTAGLI UTENTE
        </h1>
        <div class="users-container">

                <div class="user">
                    <img src="{{ $user['image'] }}" alt="img user">
                    <h3>{{ $user['first_name'] . " " . $user['last_name']}}</h3>
                    <span class="email">{{ $user['email'] }}</span>
                    <span class="gender">{{ $user['gender'] }}</span>
                </div>

        </div>        
    </div>
</main>
@endsection

@section('title-page')
    DETTAGLI UTENTE
@endsection