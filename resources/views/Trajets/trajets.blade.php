
@extends("layouts.app")
@section("content")
@foreach($trajets as $trajets)
<tr>
<th>{{$trajets->date_de_depart}}</th>
<th>{{$trajets->lieu_de_depart}}</th>
<th>{{$trajets->date_darrivee}}</th>
<th>{{$trajets->lieu_darrivee}}</th>
<th>{{$trajets->type_de_vehicule}}</th>
<br> {{
$trajets->trajets->name ?? '' }}</th>
<th></th>
</tr>
@endforeach
@endsection