<section class="formulaire container mt-5  col-md-6 offset-md-3 row">
    <form method="POST" action="newenseignant" enctype="multipart/form-data"
        class="border p-4 rounded shadow-sm  ">
        @csrf

        <div class="mb-4 text-center">
            <h2>Ajout des enseignants</h2>
        </div>

        <div>
            <label for="first_name" class="form-label">Nom :</label>
            <input type="text" class="form-control" name="first_name">

        </div>
        <div>
            <label for="last_name" class="form-label">Prénoms :</label>
            <input type="text" class="form-control" name="last_name">

        </div>
        <div>
            <label for="tel" class="form-label">Telephone:</label>
            <input type="text" class="form-control" name="tel">

        </div>
        <div>
            <label for="address" class="form-label">Adresse :</label>
            <input type="text" class="form-control" name="address">
        </div>

        <button class="btn btn-success mt-4" type="submit" class="mt-4">Ajouter enseignant</button>
    </form>

</section>
