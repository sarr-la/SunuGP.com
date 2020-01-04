@extends("layouts.app")
@section("content")

<form action="{{route('store_client')}}" method="post">



@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif


@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif

   @csrf
   <div><input type="text" name="prenom" class="form-control" placeholder="prenom"></div>
   <div><input type="text" name="nom" class="form-control" placeholder="nom"> </div>
   <div> <button class="btn btn-primary">ajouter un client</button> </div>
</form>

@endsection
