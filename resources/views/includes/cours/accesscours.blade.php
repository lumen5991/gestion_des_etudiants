<section>
    <div class="container " style="margin-top: 400px !">

        <div class="d-flex justify-content-between align-items-center mt-3">

            <div>
                <a class="btn btn-primary" href="{{ route('addcategories') }}">Ajouter Catégorie</a>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('addcours') }}">Ajouter cours</a>
            </div>

        </div>
    </div>
</section>

<section>

    <div class="container">
        <div class="mt-4">
            <h2>LISTE DES COURS</h2>

            <section>
                @if (session('succcess'))
                    <div class="alert alert success alert dismissible fade show" role="alert">
                        <strong>Message success</strong> <br> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </section>

            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                           {{--  <th>id</th> --}}
                            <th>Nom du cours</th>
                            <th>Max horaire</th>
                            <th>Coef</th>
                            <th>Catégories</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cours as $item)
                            <tr>
                             {{--    <td class="align-middle"> {{ $item->id }} </td> --}}
                                <td class="align-middle"> {{ $item->nom_cours }} </td>
                                <td class="align-middle"> {{ $item->max_horaire }} </td>
                                <td class="align-middle"> {{ $item->coef }} </td>
                                <td class="align-middle"> {{$item->categorie->name ?? 'categorie non definie'}}</td>
                              
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>
