{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="container mt-5">
        <h1>Détails de l'Étudiant</h1>
    
        <div class="card">
            <div>
                <img src="{{ $student['image'] }}" alt="Photo" class="card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title"> Nom et Prénoms: {{ $student['nom'] }} {{ $student['prenom'] }}</h5>
                <p class="card-text"><strong>Date de Naissance:</strong> {{ $student['date_de_naissance'] }}</p>
                <p class="card-text"><strong>Hobbies:</strong> {{ $student['hobbies'] }}</p>
                <p class="card-text"><strong>Spécialités:</strong> {{ $student['specialites'] }}</p>
                <a href="{{ route('index') }}" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>
    
</body>
</html> --}}

@extends('layout.master')
@if(isset($id))
@section('content')
    @include('includes.infos')
@endsection 
@else 
    @section('content')
    <div>
        @include('includes.form')
    </div>
    @endsection
@endif