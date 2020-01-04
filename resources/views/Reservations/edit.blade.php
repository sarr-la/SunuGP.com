<form action="{{route('update_Reservations',['id'=>$Reservations->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="produit" class="form-control" placeholder="produit" value="{{$Reservations->produit}}"></div>
   <div><input type="text" name="poids" class="form-control" placeholder="poids" value="{{$Reservations->poids}}"> </div>
   <div><input type="text" name="unite" class="form-control" placeholder="unite" value="{{$Reservations->unite}}"> </div>
   <div><input type="text" name="type_de_produit" class="form-control" placeholder="type_de_produit" value="{{$Reservations->type_de_produit}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer une reservation</button> </div>
</form>
