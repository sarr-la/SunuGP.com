<table class="table table-striped">
@foreach($Contact as $Contact)
<tr>
<th>{{$Contact->prenom}}</th>
<th>{{$Contact->nom}}</th>
<th>{{$Contact->email}}</th>
<th>{{$Contact->votre_sujet}}</th>
<th>{{$Contact->votre_message}}<br>
 {{
$Contact->Contact->name ?? '' }}</th>
<th></th>
</tr>
@endforeach
</table>