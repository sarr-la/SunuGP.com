@extends("layouts.app")
@section("content")
<table class="table table-striped">
       <tr>
           <th> prenom</th>
           <th> nom</th>
           <th> votre_numero</th>
           <th> date_de_depart</th>
            <th>lieu_de_depart</th>
            <th>date_darrivee</th>
            <th>lieu_darrivee</th>
            <th>type_de_vehicule</th>
            <th>matricule</th>
       </tr>
       @foreach($trajet as $trajet)
           <tr>
               <th>{{$trajet->prenom}}</th>
               <th>{{$trajet->nom}}</th>
               <th>{{$trajet->votre_numero}}</th>
               <th>{{$trajet->date_de_depart}}</th>
               <th>{{$trajet->lieu_de_depart}}</th>
               <th>{{$trajet->date_darrivee}}</th>
               <th>{{$trajet->lieu_darrivee}}</th>
               <th>{{$trajet->type_de_vehicule}}</th>
               <th>{{$trajet->matricule}}</th>
               <p><a href="{{route('ajouter_trajet')}}">Ajouter un trajet</a></p>


        </tr>

@endforeach
   </table>
   @endsection
