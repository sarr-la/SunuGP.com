@extends("layouts.app")
@section("content")



    @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif


    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif


<form action="{{route('store_Contact')}}" method="post">
@csrf
<div>
<input type="text" name="prenom" class="form-control" placeholder="prenom">
</div>
<div>
<input type="text" name="nom" class="form-control" placeholder="nom">
</div>
<div>
<input type="text" name="email" class="form-control" placeholder="email">
</div>
    <div>
        <input type="text" name="numero_de_telephone" class="form-control" placeholder="numero_de_telephone">
    </div>
<div>
<input type="text" name="votre_sujet" class="form-control" placeholder="votre_sujet">
</div>
<div>
<input type="text" name="votre_message" class="form-control" placeholder="votre_message">
</div>
<div>
<button class="btn btn-primary">Enregistrer</button>
</div>
</form><div class="container">



@endsection
