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
   <div><input type="text" name="date_de_depart" class="form-control" placeholder="date de départ, exemple:2020-01-19 19:39:25"></div>
   <div><input type="text" name="lieu_de_depart" class="form-control" placeholder="lieu de départ"></div>
   <div><input type="text" name="date_darrivee" class="form-control" placeholder="date d'arrivée, exemple:2020-01-20 19:39:27"></div>
   <div><input type="text" name="lieu_darrivee" class="form-control" placeholder="lieu d'arrivée"></div>
   <div><input type="text" name="type_de_vehicule" class="form-control" placeholder="type de véhicule"></div>
   <div><input type="image" name="image" class="form-control" placeholder="image"></div>
   <div> <button class="btn btn-primary">ajouter un trajet</button> </div>
</form>
@endsection
