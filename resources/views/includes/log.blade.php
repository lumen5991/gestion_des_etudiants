<div class="card card-primary container mx-auto mt-5"  style="width: 500px" >

    <section>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div>
                    <div>
                        <strong>Message Success</strong> <br>
                        {{session('success')}}
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">

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
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">

                </button>
            </div>
        @endif
    </section>


    <div class="card-header bg-primary text-white mt-3">
        Authentification
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('authentification') }}" enctype="multipart/form-data" autocomplete='off'>
            @csrf
          
            <div class="form-group mb-3 ">
                <label for="email" class="control-label">Email</label>
                <input type="text" name="email" placeholder="saisir votre email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="password" class="control-label">Mot de passe</label>
                <input type="password" name="password" placeholder="saisir votre mot de passe" class="form-control">
            </div>
            <div class="d-flex align-items-center" style="justify-content: space-between" >
                <p>Pas de compte? <a href="{{route('register')}}">S'inscrire</a> </p>
                <button type="submit"class="">Connexion</button>
            </div>
            {{-- <div class="d-flex align-items-center" style="justify-content: space-between" >
                <p>Mot de passe oublié? <a href="{{route('forget')}}">Cliquez ici</a> </p> 
            </div> --}}
        </form>
    </div> 
</div>