<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
    @yield("content")

</body>
</html>