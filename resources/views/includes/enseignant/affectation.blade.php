<section>
    <h2 class="text-center mt-4">Affectation des cours</h2>
    <a href="" class="text-center"></a>
    <div class="container border d-flex justify-content-between" style="margin-top: 20px;">
        <div style="width: 30%">

            <div class="mt-4">
                <div class="name_enseignant">
                    {{--   @foreach ($enseignant as $item) --}}
                    <p>Nom de l'enseignant : <strong> {{ $enseignant->first_name . ' ' . $enseignant->last_name }} </strong>
                    </p>

                    {{-- @endforeach --}}

                </div>
                <form method="POST" action="{{ route('saveAffectation', ['enseignant_id' => $id]) }}">
                    @csrf
                    <div class="mt-3">
                        <label for="" class="form-label">Cours :</label>
                        <div>
                            <select name="cours_id[]" id="cours_id" multiple style="width: 100%">
                                <option value="">Sélectionner les cours</option>
                                @foreach ($cours as $coursItem)
                                    <option value="{{ $coursItem->id }}">{{ $coursItem->nom_cours }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="my-3 btn btn-danger btn-sm" type="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        <div style="width:60%">
            <div>
                <h4>Liste des affectations</h4>
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
                            <td class="align-middle">    @if (isset($id))
                                Enseignant {{ $id }}
                                @endif </td>
                            <td class="align-middle">
                                @foreach ($affEn as $cours)
                                    <ul>
                                        <li>{{ $cours->coursEns->nom_cours }}</li>
                                    </ul>
                                    
                                @endforeach
                            </td>

                            <td class="align-middle">
                                <a class="btn btn-success btn-sm" href="#">Supprimer</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
