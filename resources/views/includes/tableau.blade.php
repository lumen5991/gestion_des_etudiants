<div class="container">
    <div class="mt-4">
        <h2>LISTE DES ETUDIANTS</h2>

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
                    <tr class="table-dark">
                        {{-- <th>id</th> --}}
                        <th>Photo</th>
                        <th>Nom et Prénoms</th>
                        <th>Hobbies</th>
                        <th>Spécialités</th>
                        <th>Actions</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tableEtu as $item)
                        <tr class="{{ $item['status'] ? '' : 'table-secondary' }} ">

                            {{--  <td class="align-middle">{{ $item['id'] }} </td> --}}
                            <td class="align-middle">
                                <img src="{{ $item['photo'] }}" alt="Photo 1" width="50"
                                    class="rounded-circle img-thumbnail">
                            </td>
                            <td class="align-middle">{{ $item['nom'] }} {{ $item['prenoms'] }}</td>
                            <td class="align-middle">{{ $item['hobbies'] }} </td>
                            <td class="align-middle">{{ $item['specialite'] }} </td>
                            <td class="align-middle">
                                {{-- <a class="btn btn-success btn-sm" href="{{ route('details', ['id' => $student ?? '' ['id']]) }}" title="Voir">&#8862;</a>
                                         --}}


                                <a class="btn btn-success btn-sm" href="{{ route('details', ['id' => $item['id']]) }}"
                                    title="Voir"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg></a>



                                <a class="btn btn-primary btn-sm" href="{{ route('newform', ['id' => $item->id]) }}"
                                    title="Modifier"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-edit">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg></a>


                                <a class="btn btn-danger btn-sm" href="{{ route('deleteEtu', ['id' => $item['id']]) }}"
                                    title="Supprimer"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-trash-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path
                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                        </path>
                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                    </svg></a>
                            </td>
                            <td class="align-middle pt-4">
                                <form method="POST" action="{{ route('activate', ['id' => $item['id']]) }}">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-{{ $item['status'] ? 'success' : 'danger' }} ">
                                        {{ $item['status'] ? 'Activé' : 'Désactivé' }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>





{{-- 
    <div class="d-flex justify-content-between align-items-center mt-3" >

        <div>
            <a class="btn btn-primary" href="{{route('addEtu')}}">Ajouter un étudiant</a>
        </div>
        <div>
            <a class="btn btn-primary" href="">Ajouter une catégorie</a>
        </div>

    </div> --}}
