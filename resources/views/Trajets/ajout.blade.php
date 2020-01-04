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
   <div><input type="text" name="date_de_depart" class="form-control" placeholder="date_de_depart"></div>
   <div><input type="text" name="lieu_de_depart" class="form-control" placeholder="lieu_de_depart"></div>
   <div><input type="text" name="date_darrivee" class="form-control" placeholder="date_darrivee"></div>
   <div><input type="text" name="lieu_darrivee" class="form-control" placeholder="lieu_darrivee"></div>
   <div><input type="text" name="type_de_vehicule" class="form-control" placeholder="type_de_vehicule"></div>
   <div><input type="image" name="image" class="form-control" placeholder="image"></div>
   <div> <button class="btn btn-primary">ajouter un trajet</button> </div>
</form>
@endsection
