@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <tr>
            <th>date_de_depart</th>
            <th>lieu_de_depart</th>
            <th>date_darrivee</th>
            <th>lieu_darrivee</th>
            <th>type_de_vehicule</th>
            <th>matricule</th>
        </tr>
        @foreach($Trajets as $Trajets)
            <tr>
                <th>{{$Trajets->date_de_depart}}</th>
                <th>{{$Trajets->lieu_de_depart}}</th>
                <th>{{$Trajets->date_darrivee}}</th>
                <th>{{$Trajets->lieu_darrivee}}</th>
                <th>{{$Trajets->type_de_vehicule}}</th>
                <th>{{$Trajets->matricule}}</th>
            <tr>
                <th>{{$Trajets->name}} - <img src="{{$Trajets->image ?
asset($Trajets->image) : asset('uploads/images/default.png')}}"
                                              alt="{{$Trajets->name}}" width="50"></th>
                <th>{{$Trajets->date_de_depart}} {{$Trajets->lieu_de_depart}} {{$Trajets->date_darrivee}} {{$Trajets->lieu_darrivee}} {{$Trajets->type_de_vehicule}} {{$Trajets->matricule}} {{ $Trajets->image->name ?? ''
}}</th>
                <th>
                    <p><a href="{{route('editer_Trajets',['id'=>$Trajets->id])}}"
                          class="btn btn-primary">Editer</a></p>
                    <form action="Trajets/{{$Trajets->id}}"
                          method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn
btn-danger" name="delete" value="Supprimer">
                    </form>
                </th>
            </tr>




        @endforeach
    </table>
@endsection
