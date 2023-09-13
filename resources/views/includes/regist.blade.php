<div class="card card-primary container mt-3 box-shadow" style="width: 500px" >
    <section>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div>
                    <div>
                        <strong>Message Success</strong> <br>
                        {{session('success')}}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                </button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
            </div>
        @endif
    </section>

    <div class="card-header bg-primary text-white mt-3">
        Création de compte
    </div>
    <div class="card-body">
        <form method="POST" action="{{Route("storeUser")}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3 d-flex justify-content-space-between align-items-center" >
                <label for="first_name" class="control-label" style="width: 30%;">Nom</label>
                <input type="text" name="first_name" value="{{old('first_name')}}" placeholder="saisir votre nom" class="form-control" style="width: 70%;">
            </div>
            <div class="form-group mb-3 d-flex justify-content-space-between align-items-center" >
                <label for="last_name" class="control-label d-flex justify-content-space-between" style="width: 30%;">Prénoms</label>
                <input type="text" name="last_name" value="{{old('last_name')}}" placeholder="saisir votre prénom" class="form-control" style="width: 70%;">
            </div>
            <div class="form-group mb-3 d-flex justify-content-space-between align-items-center">
                <label for="birthday" class="control-label" style="width: 30%;">Date de naissance</label>
                <input type="date" value="{{old('birthday')}}" name="birthday" placeholder="saisir votre date de naissance" class="form-control" style="width: 70%;" >
            </div>
            <div class="form-group mb-3 d-flex justify-content-space-between align-items-center">
                <label for="email" class="control-label" style="width: 30%;" >email</label>
                <input required type="email" name="email" value="{{old('email')}}" placeholder="saisir email" class="form-control" style="width: 70%;">
            </div>
            <div class="form-group mb-3 d-flex justify-content-space-between align-items-center">
                <label for="password" class="control-label" style="width: 30%;">Mot de passe</label>
                <input type="password" name="password"  placeholder="saisir votre mot de passe" class="form-control" style="width: 70%;">
            </div>
            <div class="form-group mb-3 d-flex justify-content-space-between align-items-center">
                <label for="password_confirm" class="control-label" style="width: 30%;">Confirmer le mot de passe</label>
                <input type="password" name="password_confirmation" placeholder="confirmer votre mot de passe" class="form-control" style="width: 70%;">
            </div>
            <div class="d-flex mb-3 d-flex align-items-center" style="justify-content: space-between; ">
                <p>Déjà un compte? <a href="{{route('login')}}">Se connecter</a> </p>
                <button type="submit"class="">Inscription</button>
            </div>
            
        </form>
    </div>
</div>