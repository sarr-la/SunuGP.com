
<div class="container">
<div><h1>{{('Enregistrement de client')}}</h1></div>
<div class="container">
<form action="{{route('store_Clients')}}" method="post">
@csrf
<div>
<input type="text" name="prenom" class="form-control" placeholder="prenom">
</div>
<div>
<input type="text" name="nom" class="form-control" placeholder="nom">
</div>
<div>
<button class="btn btn-primary">Enregistrer</button>
</div>
</form><div class="container">
