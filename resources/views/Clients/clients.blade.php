<table class="table table-striped">
@foreach($clients as $clients)
<tr>
<th>{{$clients->prenom}}</th>
<th>{{$clients->nom}}<br> {{
$clients->clients->name ?? '' }}</th>
<th></th>
</tr>
@endforeach
</table>