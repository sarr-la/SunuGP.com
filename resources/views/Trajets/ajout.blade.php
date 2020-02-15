@extends("layouts.app")
@section("content")

<form action="{{route('store_trajet')}}" method="post"
enctype="multipart/form-data">



<div><input type="file" name="trajet_image"
class="form-control"></div>

@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif


@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif


   @csrf
    <div><input type="text" name="prenom" class="form-control" placeholder="Votre pénom"></div>
    <div><input type="text" name="nom" class="form-control" placeholder="Votre nom"></div>
    <div><input type="text" name="votre_numero" class="form-control" placeholder="Quel est votre numéro de téléphone ?"></div>
   <div><input type="datetime" name="date_de_depart" class="form-control" placeholder="Votre date de départ, exemple:2020-01-19 19:39:25"></div>
   <div><input type="text" name="lieu_de_depart" class="form-control" placeholder="Votre lieu de départ"></div>
   <div><input type="datetime" name="date_darrivee" class="form-control" placeholder="Votre date d'arrivée, exemple:2020-01-20 19:39:27"></div>
   <div><input type="text" name="lieu_darrivee" class="form-control" placeholder="Votre lieu d'arrivée"></div>
   <div><input type="text" name="type_de_vehicule" class="form-control" placeholder="Votre type de véhicule"></div>
       <div><input type="text" name="matricule" class="form-control" placeholder="Votre matricule, example:DK-3810-AA"></div>
       <div><input type="text" name="frais_transport" class="form-control" placeholder="Frais/kg"></div>
   <div><input type="image" name="image" class="form-control" placeholder="image"></div>
   <div> <button class="btn btn-primary">Envoyer votre demande</button> </div>
</form>
@endsection
