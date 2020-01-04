<div class="container">
<div><h1>{{('Enregistrement de contact')}}</h1></div>
<div class="container">
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
<input type="text" name="votre_sujet" class="form-control" placeholder="votre_sujet">
</div>
<div>
<input type="text" name="votre_message" class="form-control" placeholder="votre_message">
</div>
<div>
<button class="btn btn-primary">Enregistrer</button>
</div>
</form><div class="container">
