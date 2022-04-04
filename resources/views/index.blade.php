@extends('layouts.app')

@section('title', 'Rick and Morty')

@section('name')
    <h1>teste</h1>
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="" alt="">
            </div>
            <div id="info-container" class="col-md-6">
                <h5 class="card-title" id="name" name="name">Personagem: {{ $resultado['results'][0]['name'] }}</h5>
                <p id="species" name="species">Espécie: {{ $resultado['results'][0]['species'] }}</p>
                <p id="gender" name="gender">Gênero sexual: {{ $resultado['results'][0]['gender'] }}</p>
                <p id="status" name="status">Status: {{ $resultado['results'][0]['status'] }}</p>
            </div>
            {{$rick}}
        </div>
    </div>

@endsection
