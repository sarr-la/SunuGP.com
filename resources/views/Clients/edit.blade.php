<form action="{{route('update_Clients',['id'=>$Clients->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="prenom" class="form-control" placeholder="le prenom du client" value="{{$Clients->prenom}}"></div>
   <div><input type="text" name="nom" class="form-control" placeholder="Le nom du client" value="{{$Clients->nom}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
