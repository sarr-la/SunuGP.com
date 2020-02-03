<div class="container">
<div><p><a href="{{route('Reservations)}}">{{(Enregistrement de reservation)}}</a></p></div>
<div class="container">
<form action="{{route(' create_Reservations ')}}" method="post">
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
<input type="text" name="produit" class="form-control" placeholder="produit">
</div>
<div>
<input type="text" name="poids" class="form-control" placeholder="poids">
</div>
<div>
<input type="text" name="unite" class="form-control" placeholder="unite">
</div>
<div>
<input type="text" name="type_de_produit" class="form-control" placeholder="type_de_produit">
</div>
<div>
<button class="btn btn-primary">Enregistrer</button>
</div>
</form>
