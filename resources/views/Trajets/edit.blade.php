@extends("layouts.app")
@section("content")
<form action="{{route('update_Trajets',['id'=>$Trajets->id])}}" method="post"
 enctype="multipart/form-data">


 <div class="row">
<div class="col-6 text-right"><img src="{{asset($Trajets->image)}}" alt="{{$Trajets->name}}" width="100"></div><div
class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
<input type="file" name="trajet_image" class="form-control">
</div>



   @csrf
   @method('patch')
    <div><input type="text" name="prenom" class="form-control" placeholder="prenom" value="{{$Trajets->prenom}}"></div>
    <div><input type="text" name="nom" class="form-control" placeholder="nom" value="{{$Trajets->nom}}"></div>
    <div><input type="text" name="votre_numero" class="form-control" placeholder="votre_numero" value="{{$Trajets->votre_numero}}"></div>
   <div><input type="text" name="date_de_depart" class="form-control" placeholder="date_de_depart" value="{{$Trajets->date_de_depart}}"></div>
   <div><input type="text" name="lieu_de_depart" class="form-control" placeholder="lieu_de_depart" value="{{$Trajets->lieu_de_depart}}"> </div>
   <div><input type="text" name="date_darrivee" class="form-control" placeholder="date_darrivee" value="{{$Trajets->date_darrivee}}"> </div>
   <div><input type="text" name="lieu_darrivee" class="form-control" placeholder="lieu_darrivee" value="{{$Trajets->lieu_darrivee}}"> </div>
   <div><input type="text" name="type_de_vehicule" class="form-control" placeholder="type_de_vehicule" value="{{$Trajets->type_de_vehicule}}"> </div>
    <div><input type="text" name="matricule" class="form-control" placeholder="matricule" value="{{$Trajets->matricule}}"> </div>
    <div><input type="text" name="frais_transport" class="form-control" placeholder="frais/kg" value="{{$Trajets->frais_transport}}"> </div>
   <div><button class="btn btn-primary">Enregistrer</button> </div>
</form>
@endsection

