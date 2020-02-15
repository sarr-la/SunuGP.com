
@extends("layouts.app")
@section("content")
@foreach($trajets as $trajets)
<tr>
    <th>{{$trajets->prenom}}</th>
    <th>{{$trajets->nom}}</th>
    <th>{{$trajets->votre_numero}}</th>
<th>{{$trajets->date_de_depart}}</th>
<th>{{$trajets->lieu_de_depart}}</th>
<th>{{$trajets->date_darrivee}}</th>
<th>{{$trajets->lieu_darrivee}}</th>
<th>{{$trajets->type_de_vehicule}}</th>
    <th>{{$trajets->matricule}}</th>
    <th>{{$trajets->frais_transport}}</th>
<br> {{
$trajets->trajets->name ?? '' }}</th>
<th></th>
</tr>
@endforeach
@endsection
