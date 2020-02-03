
@extends("layouts.app")
@section("content")

<form action="{{route('store_reservation')}}" method="post">

<script src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>


<script defer>
let form = document.getElementById("reservation_form");
form.addEventListener('submit', function (e) {
e.preventDefault();
let donnees_formulaire = $(this).serialize();
$.ajax({
type: "POST",
url: '/ajout_reservation',
data: donnees_formulaire,
success: function(data){
alert("Reservation ajoutée");
console.log(donnees_formulaire);
$("#reservation_table").append(`<tr> <td>#</td> <td>
${data.data.name} </td> <td> <div class="row justify-content-end">
<div class="col"><a href="/reservations/${data.data.id}/edit"
class="btn btn-primary">Editer</a></div> <form class="col"
action="/reservations/${data.data.id}" method="post"> <input
type="hidden" name="_token" value="{{@csrf_token()}}"> <input
type="hidden" name="_method" value="delete">
<button type="submit" class="btn btn-danger">Suppimer</button>
</form> </div> </td> </tr>`);
$('#add_category').modal('hide');
}
});
})
</script>





<div>
<select name="trajet_id" id="trajet_id"
class="form-control">
<option value=""></option>
@foreach($trajets as $key => $value)
<option value="{{$key}}">{{$value}}</option>
@endforeach
</select>
</div>




@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif


@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">{{$error}}</div>
@endforeach
@endif

   @csrf
    <div><input type="text" name="prenom" class="form-control" placeholder="prénom"></div>
    <div><input type="text" name="nom" class="form-control" placeholder="nom"></div>
    <div><input type="text" name="votre_numero" class="form-control" placeholder="votre numéro"></div>
   <div><input type="text" name="produit" class="form-control" placeholder="produit"></div>
   <div><input type="text" name="poids" class="form-control" placeholder="poids"> </div>
   <div><input type="text" name="unite" class="form-control" placeholder="unite"> </div>
   <div><input type="text" name="type_de_produit" class="form-control" placeholder="type_de_produit"> </div>
   <div> <button class="btn btn-primary">creer une reservation</button> </div>
</form>

@endsection
