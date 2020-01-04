
@extends('layouts.app')

@section('content')


@foreach($reservations as $reservations)
<tr>
<th>{{$reservations->produit}}</th>
<th>{{$reservations->poids}}</th>
<th>{{$reservations->unite}}</th>
<th>{{$reservations->type_de_produit}}</th>
<br> {{
$reservations->reservations->name ?? '' }}</th>
<th></th>
</tr>
@endforeach

@endsection