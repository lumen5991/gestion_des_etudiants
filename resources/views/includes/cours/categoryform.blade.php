<section class="formulaire mt-5  col-md-6 offset-md-3 row">
    <form method="POST" action="newcategorie" enctype="multipart/form-data" class="border p-4 rounded shadow-sm  ">
        @csrf
        <div class="mb-4 text-center">
            <h2>Ajout des catégories</h2>
        </div>
        <div class="">
            <label for="name" class="form-label">Nom :</label>
            <input type="text" value="" class="form-control" name="name" placeholder="Nom de la catégorie">
        </div>
        <button class="btn btn-success mt-4" type="submit" class="mt-4 ">Ajouter une categorie</button>
    </form>
</section>
