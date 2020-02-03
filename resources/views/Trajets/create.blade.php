
@extends("layouts.app")
@section("content")
<div class="container">
<div><p><a href="{{route('Trajets)}}">{{(Enregistrement de trajet)}}</a></p></div>
<div class="container">
<form action="{{route(' create_Trajets ')}}" method="post">
@csrf
    <div>
        <input type="text" name="prenom" class="form-control" placeholder="prénom">
    </div>
    <div>
        <input type="text" name="nom" class="form-control" placeholder="nom">
    </div>
    <div>
        <input type="text" name="votre_numero" class="form-control" placeholder="votre numéro">
    </div>
<div>
<input type="date" name="date_de_depart" class="form-control" placeholder="date de départ, exemple:2020-01-19 19:39:25">
</div>
<div>
<input type="text" name="lieu_de_depart" class="form-control" placeholder="lieu de départ">
</div>
<div>
<input type="date" name="date_darrive" class="form-control" placeholder="date d'arrivée, exemple:2020-01-20 19:39:27">
</div>
<div>
<input type="text" name="lieu_darrivee" class="form-control" placeholder="lieu d'arrivée">
</div>
<div>
<input type="text" name="type_de_vehicule" class="form-control" placeholder="type de véhicule">
</div>
    <div>
        <input type="text" name="matricule" class="form-control" placeholder="matricule">
    </div>
<div>
<input type="image" name="image" class="form-control" placeholder="image">
</div>
<div>
<button class="btn btn-primary">Enregistrer</button>
</div>
</form>
@endsection
