<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>  @yield("title")</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary-subtle py-3 px-3 d-flex justify-content-between align-items-center">
            <div class="">
                <a class="navbar-brand text-primary bold mx-auto fs-4" href="#">Ecole229</a>
            </div>
            <div>
                <h3>{{ $nom ?? '' }} {{ $prenom ?? ''}} @if (isset($id))
                    N_{{ $id }}
                    @endif

            </h3>
            </div>
            <div>
                <a class="btn btn-danger p-2 float-end" href="{{route('logout')}}">DECONNEXION</a>
            </div>
        </nav>
    </header>

    <div class="container " style="margin-top: 400px !">

        <div class="d-flex justify-content-between align-items-center mt-3">
    
            <div>
                <a class="btn btn-primary" href="{{ route('addEtu') }}">Ajouter un étudiant</a>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('accesscours')}}">Gestion des cours</a>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('enseignant')}}">Gestion des enseignants</a>
            </div>
            <div>
                <a class="btn btn-primary" href="{{route('get_etudiant')}}">Attribuer cours</a>
            </div>
    
        </div>
    </div>
    @yield("content")

</body>

</html>