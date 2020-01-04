<table class="table table-striped">
       <tr>
           <th></th><th>prenom client</th> 
            <th>nom client</th>
       </tr>
       @foreach($client as $client)
           <tr>
               <th></th>
               <th>{{$client->prenom}}</th>
               <th>{{$client->nom}}</th>
               <p><a href="{{route('ajouter_client')}}">ajouter un client</a></p>

                </th>
        </tr>
    
@endforeach
   </table>
