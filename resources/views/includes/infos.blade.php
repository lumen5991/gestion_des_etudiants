<div class="container mt-5   ">
    <h1 class="text-center">Détails de l'Étudiant</h1>
    <div class="card d-flex align-items-center justify-content-center mx-auto" style="width: 500px">
        @if (isset($id))
            @foreach ($tableEtu as $item)
                @if($id == $item['id'])
        <div style="flex: 0 0 150px;">
            <img src="{{asset($item['photo'])}}" alt="Photo" class="card-img-top rounded-circle text-center" style="width: 150px; height: 150px;">
        <div class="card-body">
            <h5 class="card-title"> Nom et Prénoms: <strong>{{$item['nom']}} {{$item['prenoms']}}</strong>  </h5>
            <p class="card-text"><strong>Date de Naissance:{{$item['date_de_naissance']}} </strong> </p>
            <p class="card-text"><strong>Hobbies:{{$item['hobbies']}} </strong> </p>
            <p class="card-text"><strong>Spécialités: {{$item['specialite']}} </strong> </p>
            <p class="card-text"><strong>Biographie: {{$item['bio']}} </strong> </p>
            
            <a 
            @if($id > 1 ) 
            href="{{ route('details',['id'=>$item['id'] -1]) }}" 
            @else
            href="{{route('index')}}"
            @endif class="btn btn-primary">Retour</a>
        
            <a 
            @if($id < sizeof($tableEtu)) 
            href="{{ route('details',['id'=>$item['id'] +1]) }}" 
            @else
            href="{{route('index')}}"
            @endif class="btn btn-primary">Suivant</a>
        </div>
                @endif
            @endforeach
        @endif
    </div>
</div>