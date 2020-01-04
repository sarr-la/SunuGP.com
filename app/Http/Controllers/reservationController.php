<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservationController extends Controller
{
 
public function reservation(){
    $reservation = \App\Resevation::all();
    return view('Reservations.reservation', compact('reservation'));
}       


public function index(){
    $reservation = \App\Resevation::orderBy('created_at','DESC')->get();
    return view('Reservations.reservation', compact('reservation'));
    }

public function ajout(){
    $trajets = \App\Trajet::pluck('lieu_de_depart','id');

    return view('Reservations.ajout', compact('trajets'));
}


public function store(Request $request)
{
    $data = $request->validate([
        'produit'=>'required|min:2',
        'poids' => 'required|min:1|numeric',
        'unite'=>'required|min:2',
        'type_de_produit'=>'required|min:2',
        ]);


        $reservation = new \App\Resevation();
        $reservation->produit = $request->input('produit');
        $reservation->poids = $request->input('poids');
        $reservation->unite = $request->input('unite');
        $reservation->type_de_produit = $request->input('type_de_produit');
        $reservation->client_id = 1;
        $reservation->trajet_id = 1;
        $reservation->save();


        return redirect()->route('ajouter_reservation')->with(['success' => "reservation enregistré"]);


}
}