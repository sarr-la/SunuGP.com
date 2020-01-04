<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{



    public function ajout_reservation(Request $request){
        $data = $request->validate([
            'produit'=>'required|min:2',
            'poids' => 'required|min:1|numeric',
            'unite'=>'required|min:2',
            'type_de_produit'=>'required|min:2',
        ]);
        $reservation = new Resevation();
        $reservation->produit = $request->input('produit');
        $reservation->poids = $request->input('poids');
        $reservation->unite = $request->input('unite');
        $reservation->type_de_produit = $request->input('type_de_produit')?? 0;
        if($saved =
        \App\Resevation::updateOrCreate(['produit'=>$produit,'poids' =>
        $poids, 'unite'=>$unite, 'type_de_produit'=>$type_de_produit]))
        return response()->json([
        'message' => 'Reservation enregistrée',
        'data' => ['id'=>$saved->id, 'produit'=>$produit,'poids' =>
        $poids, 'unite'=>$unite, 'type_de_produit'=>$type_de_produit],
        'errors' => []
        ],
        200);
        else
        return response()->json(['message' => 'Erreur lors de la
        modification', 'status' => 401,'errors'=>$data->errors()->all()],200);
        }




}
