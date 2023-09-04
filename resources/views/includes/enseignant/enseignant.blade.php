<section>
    <div class="container " style="margin-top: 400px !">

        <div class="text-center mt-3">

                <a class="btn btn-primary" href="{{route('addenseignant')}}">Ajouter Enseignant</a>

        </div>
    </div>
</section>
<section>

    <div class="container">
        <div class="mt-4">
            <h2>LISTE DES ENSEIGNANTS</h2>

            <section>
                @if (session('succcess'))
                    <div class="alert alert success alert dismissible fade show" role="alert">
                        <strong>Message success</strong> <br> {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif
            </section>

            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>id</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Telephone</th>
                            <th>Adresse</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($enseignants as $item)
                            
                        <tr>
                            <td class="align-middle"> {{ $item->id }} </td>
                            <td class="align-middle"> {{ $item->first_name }} </td>
                            <td class="align-middle">{{ $item->last_name }}</td>
                            <td class="align-middle">{{ $item->tel }}</td>
                            <td class="align-middle">{{ $item->address }}</td>
                            <td class="align-middle">
                                <a class="btn btn-success btn-sm" href="{{route('affectationEns')}}"> Affecter </a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>
