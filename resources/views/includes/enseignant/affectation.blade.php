<section>
    <h2 class="text-center mt-4">Affectation des cours</h2>
    <div class="container border d-flex justify-content-between" style="margin-top: 400px !">
        <div style="width: 50%">
            <div>
                AHLE Lumen
            </div>
            <div class="mt-4">
                <form method="" action="">
                    <label for="cours_id" class="form-label">Cours :</label>
                    <select name="categorie_id" id="cours_id">

                        <option value=""></option>

                    </select>
                    <div>
                        <button class="mt-4 btn btn-success" type="submit">Enregistrer</button>
                    </div>

                    
                    </form>

            </div>


        </div>
        <div style="width: 50%">
            <div>
                <h4>Liste des affectation</h4>
            </div>
            <div class="mt-4">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID_AFF</th>
                            <th>Cours</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td class="align-middle"> 1 </td>
                            <td class="align-middle"> Laravel </td>
                            <td class="align-middle">
                                <a class="btn btn-success btn-sm" href=""> Supprimer </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
