
@extends("layouts.app")
@section("content")
<div class="container">
<div><p><a href="{{route('Trajets)}}">{{(Enregistrement de trajet)}}</a></p></div>
<div class="container">
<form action="{{route(' create_Trajets ')}}" method="post">
@csrf
<div>
<input type="text" name="date_de_depart" class="form-control" placeholder="date_de_depart">
</div>
<div>
<input type="text" name="lieu_de_depart" class="form-control" placeholder="lieu_de_depart">
</div>
<div>
<input type="text" name="date_darrive" class="form-control" placeholder="date_darrivee">
</div>
<div>
<input type="text" name="lieu_darrivee" class="form-control" placeholder="lieu_darrivee">
</div>
<div>
<input type="text" name="type_de_vehicule" class="form-control" placeholder="type_de_vehicule">
</div>
<div>
<input type="image" name="image" class="form-control" placeholder="image">
</div>
<div>
<button class="btn btn-primary">Enregistrer</button>
</div>
</form>
@endsection