<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationsController extends Controller
{

    public function Reservations(){
        $Reservations = \App\Resevation::orderBy('created_at')->get();
        return view('Reservations.Reservations', compact('Reservations'));
     }

     public function create()
     {
      $trajets = \App\Trajet::pluck('lieu_de_depart','id');
      return view('create', compact('trajets'));

        }

     

     public function store(Request $request)
{
   $Reservations = new Resevation();
   $Reservations->produit = $request->input('produit');
   $Reservations->poids = $request->input('poids');
   $Reservations->unite = $request->input('unite');
   $Reservations->type_de_produit= $request->input('type_de_produi');
   $reservation->trajet_id = $request->input('trajet_id');
   $Reservations->save();
   return redirect('/');
}


public function edit($id)
{
   $Reservations = \App\Resevation::find($id);//on recupere les reservations
   return view('Reservations.edit', compact('Reservations'));
}

public function update(Request $request, $id){
    $Reservations = \App\Resevation::find($id);
    if($Reservations){
        $Reservations->produit = $request->input('produit');
        $Reservations->poids = $request->input('poids');
        $Reservations->unite = $request->input('unite');
        $Reservations->type_de_produit = $request->input('type_de_produit');
        $Reservations->save();
      }
      return redirect('/Reservations');
 }
 

 public function suprimer($id)
{
$Reservations = \App\Resevation::find($id);
if($Reservations)
$Reservations->delete();
return redirect('/Reservations');


}
}