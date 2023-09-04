<section class="formulaire container mt-5  col-md-6 offset-md-3 row">
    <form method="POST" action="{{route('newcours')}}" enctype="multipart/form-data" class="border p-4 rounded shadow-sm  ">
        @csrf

        <div class="mb-4 text-center">
            <h2>Ajout des cours</h2>
        </div>

        <div>
            <label for="nom_du_cours" class="form-label">Nom du cours :</label>
        <input type="text" class="form-control" name="nom_cours" id="nom_du_cours">

        </div>
        <div>
            <label for="max_horaire" class="form-label">Max horaire :</label>
        <input type="text" class="form-control" name="max_horaire" id="max_horaire">

        </div>
        <div>
            <label for="coef" class="form-label">Coef :</label>
        <input type="number" class="form-control" name="coef" id="coef">

        </div>
        <div class="mt-3">
            <label for="categorie_id" class="form-label">Catégorie :</label>
            <select name="categorie_id" id="categorie_id">
                <option selected>Sélectionner une catégorie</option>
                @foreach ($categories as $item)
                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                @endforeach
            </select>
        </div>
        
        <button class="btn btn-success mt-4" type="submit">Ajouter Cours</button>
    </form>

</section>
