<section>
    <section>
        @if (session('succcess'))
            <div class="alert alert success alert dismissible fade show" role="alert">
                <strong>Message success</strong> <br> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
    </section>

    <div class="container border mt-5">

        <div class="d-flex align-items-center mt-4 ">

            <div class="mx-4" style="width: 200px">
                <img src="{{ asset('images/photo1.jpg') }}" alt="" class="rounded-circle rounded img-fluid"
                    style="width: 100%; height : auto ">
            </div>

            <div class="mx-4">
                <p> <strong style="font-size: 18px">Nom et Prénoms :</strong> AHLE Rolande </p>
                <p> <strong style="font-size: 18px">Cours :</strong> xxxxxxxxxxxx </p>
            </div>

        </div>
        <div class="d-flex justify-content-between align-items-center" style="margin-bottom:50px">
            <div class="table-responsive mt-3" style="width:60%">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Type</th>
                            <th>Note 1</th>
                            <th>Note 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle">Partiel</td>
                            <td class="align-middle">14</td>
                            <td class="align-middle">15</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="width: 30%">
                <div>
                    <label for="note" class="form-label">Note</label>
                    <input type="number" name="note" class="form-control">
                </div>
                <div class="my-4">
                    <select name="" id="" style="width:100%">
                        <option selected  style="height: 20px"> Sélectionne le type </option>
                        <option value="">Devoir</option>
                        <option value="">Partiel</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
