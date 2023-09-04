<section class="formulaire container mt-5  col-md-6 offset-md-3 row">
    <form method="POST" action="{{ route('formulaire') }}" enctype="multipart/form-data" class="border p-4 rounded shadow-sm  ">
        @csrf
       {{--  @method('PUT') --}}
        <div class="mb-4">
            <h2>Ajoutez les étudiants ici</h2>
        </div>
        <div class="">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" value="{{ $etudiant->nom ?? old('nom') }}" class="form-control" name="nom" placeholder="Ecrivez votre objet">
        </div>
        <div class="">
            <label for="prenoms" class="form-label">Prénoms :</label>
            <input type="text" value="{{ $etudiant->prenoms ?? old('prenoms') }}" class="form-control" name="prenoms" placeholder="Ecrivez votre objet">
        </div>
        <div class="">
            <label for="date_de_naissance" class="form-label">Date de naissance :</label>
            <input type="date" value="{{ $etudiant->date_de_naissance ?? old('date_de_naissance') }}" class="form-control" name="date_de_naissance" placeholder="Ecrivez votre objet">
        </div>
        <div class="">
            <label for="hobbies" class="form-label">Hobbies :</label>
            <input type="text" value="{{ $etudiant->hobbies ?? old('hobbies') }}" class="form-control" name="hobbies" placeholder="Ecrivez votre objet">
        </div> 
        <div class="">
            <label for="specialite" class="form-label">Specialités :</label>
            <input type="text" value="{{ $etudiant->specialite ?? old('specialite') }}" class="form-control" name="specialite" placeholder="Ecrivez votre objet">
        </div> 
        <div class="">
            <label for="bio" class="form-label">Biographie :</label>
            <textarea name="bio" id="" cols="10" rows="10" class="form-control">{{ $etudiant->bio ?? old('bio') }}</textarea>
        </div> 
        <div class="mb-4">
            <label for="photo" class="form-label">Ajouter votre photo de profil :</label>
            <input class="form-control" type="file" value="{{ $etudiant->photo ?? old('photo') }}" name="photo" >
        </div>
        <button type="submit" class="">Valider</button>
    </form>
</section>
