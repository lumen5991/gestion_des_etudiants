<section>
    @if (session('succcess'))
        <div class="alert alert success alert dismissible fade show" role="alert">
            <strong>Message success</strong> <br> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</section>
<section>
    <h2 class="text-center mt-4">Affectation des cours</h2>
    <div class="container border d-flex justify-content-between" style="margin-top: 400px !">
        <div style="width: 30%">

            <div class="mt-4">
                <form method="POST" action="{{route('get_attribute')}}">
                    @csrf
                    <div class="mt-3">
                        <label for="" class="form-label">Etudiants :</label>
                        <div>
                            <select name="etudiant_id" id="" style="width: 100%">

                                <option selected> Sélectionner l'étudiant </option>
                                @foreach ($student as $item)
                                <option value="{{$item['id']}}">{{$item['nom']}} {{$item['prenoms']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label">Cours :</label>
                        <div>
                            <select name="cours_id[]" id="" multiple style="width: 100%">
                                <option selected> Sélectionner les cours </option>
                                @foreach ($cours as $item)
                                <option value="{{$item['id']}}">{{$item['nom_cours']}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <button class="mt-4 btn btn-success mb-3" type="submit">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
        <div style="width:60%">
            <div>
                <h4>Liste des affectation</h4>
            </div>
            <div class="mt-4">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID_AFF</th>
                            <th>Etudiants</th>
                            <th>Cours</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($student_list as $item)
                        <tr>
                            <td class="align-middle">{{$item->id}}</td>
                            <td>{{$item->nom}}  {{$item->prenoms}}</td>
                            <td class="align-middle">
                                @foreach($item->see_affectationEtudiant as $item)
                                <ul>
                                    <li>
                                        <a href="{{route('note')}}" style="color: black; text-decoration:none">{{$item->get_cours->nom_cours}}</a>
                                    </li>
                                </ul>
                                @endforeach
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
