
@extends('layouts.app')

@section('content')


<table class="table table-striped">
       <tr>
           <th>prenom</th>
           <th>nom</th>
           <th>votre_numero</th>
           <th>produit</th>
           <th>poids</th>
           <th>unite</th>
           <th>type_de_produit</th>
       </tr>
       @foreach($Reservations as $Reservations)
           <tr>
               <th>{{$Reservations->prenom}}</th>
               <th>{{$Reservations->nom}}</th>
               <th>{{$Reservations->votre_numero}}</th>
               <th>{{$Reservations->produit}}</th>
               <th>{{$Reservations->poids}}</th>
               <th>{{$Reservations->unite}}</th>
               <th>{{$Reservations->type_de_produit}}</th>
                <th>
                      <p><a href="{{route('editer_Reservations',['id'=>$Reservations->id])}}">Editer une reservation</a></p>

                </th>
                <th>
                      <p><a href="{{route('suprimer_Reservations',['id'=>$Reservations->id])}}">suprimer une reservation</a></p>

                </th>

@endforeach
   </table>

   @endsection
