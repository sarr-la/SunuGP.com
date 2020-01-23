<table class="table table-striped">
       <tr>
           <<th>prenom</th>
            <th>nom </th>
            <th>email </th>
           <th>numero_de_telephone </th>
            <th>votre_sujet </th>
            <th>votre_message </th>
       </tr>
       @foreach($Contact as $Contact)
           <tr>
               <th></th>
               <th>{{$Contact->prenom}}</th>
               <th>{{$Contact->nom}}</th>
               <th>{{$Contact->email}}</th>
               <th>{{$Contact->numero_de_telephone}}</th>
               <th>{{$Contact->votre_sujet}}</th>
               <th>{{$client->votre_message}}</th>

               <p><a href="{{route('ajouter_Contact')}}">ajouter contact</a></p>

                </th>
        </tr>

@endforeach
   </table>
