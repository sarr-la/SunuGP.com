<form action="{{route('update_Reservations',['id'=>$Reservations->id])}}" method="post">
   @csrf
   @method('patch')
    <div><input type="text" name="prenom" class="form-control" placeholder="prenom" value="{{$Reservations->prenom}}"></div>
    <div><input type="text" name="nom" class="form-control" placeholder="nom" value="{{$Reservations->nom}}"></div>
    <div><input type="text" name="votre_numero" class="form-control" placeholder="votre_numero" value="{{$Reservations->votre_numero}}"></div>
   <div><input type="text" name="produit" class="form-control" placeholder="produit" value="{{$Reservations->produit}}"></div>
   <div><input type="text" name="poids" class="form-control" placeholder="poids" value="{{$Reservations->poids}}"> </div>
   <div><input type="text" name="unite" class="form-control" placeholder="unite" value="{{$Reservations->unite}}"> </div>
   <div><input type="text" name="type_de_produit" class="form-control" placeholder="type_de_produit" value="{{$Reservations->type_de_produit}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer une reservation</button> </div>
</form>
