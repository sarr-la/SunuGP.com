
@extends("layouts.app")
@section("content")

<table class="table table-striped">
       <tr>
           <th>prenom client</th>
           <th>nom client</th> 
       </tr>
       @foreach($Clients as $Clients)

           <tr>
               <th>{{$Clients->prenom}}</th>
               <th>{{$Clients->nom}}</th>
                <th>
                      <p><a href="{{route('editer_Clients',['id'=>$Clients->id])}}">Editer un client</a></p>

                </th>
                <th>
                      <p><a href="{{route('suprimer_Clients',['id'=>$Clients->id])}}">suprimer un client</a></p>

                </th>
    
@endforeach
   </table>
   @endsection
