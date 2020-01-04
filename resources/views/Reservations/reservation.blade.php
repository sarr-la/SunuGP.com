<table class="table table-striped">
       <tr>
           <th>produit</th> 
            <th>poids</th>
            <th>unite</th> 
            <th>type_de_produit</th> 
       </tr>
       @foreach($reservation as $reservation)








           <tr>
               <th>{{$reservation->produit}}</th>
               <th>{{$reservation->poids}}</th>
               <th>{{$reservation->unite}}</th>
               <th>{{$reservation->type_de_produit}}</th>
               <p><a href="{{route('ajouter_reservation')}}">Créer une reservation</a></p>

                </th>
        </tr>




@endforeach
   </table>
