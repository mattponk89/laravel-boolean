@extends('layouts.layout')

@section('main')
<main>
    <div class="container">
        <h1>
            UTENTI
        </h1>
        <div class="users-container">

            @foreach($db_utenti as $user)
                <div class="user">
                    <img src="{{ $user['image'] }}" alt="img user">
                    <h3>{{ $user['first_name'] . " " . $user['last_name']}}</h3>
                    <span class="email">{{ $user['email'] }}</span>
                    <span class="gender">{{ $user['gender'] }}</span>
                </div>
            @endforeach

        </div>        
    </div>
</main>
@endsection

@section('title-page')
    UTENTI
@endsection