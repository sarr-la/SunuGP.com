<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class TrajetsController extends Controller
{
    public function Trajets(){
        $Trajets = \App\Trajet::orderBy('created_at')->get();
        return view('Trajets.Trajets', compact('Trajets'));
     }

     public function create()
     {
        return view('create');
     }


     public function store(Request $request)
{
   $Trajets = new Trajet();
   $Trajets->prenom = $request->input('prenom');
   $Trajets->nom = $request->input('nom');
   $Trajets->votre_numero = $request->input('votre_numero');
   $Trajets->date_de_depart = $request->input('date_de_depart');
   $Trajets->lieu_de_depart = $request->input('lieu_de_depart');
   $Trajets->date_darrivee = $request->input('date_darrivee');
   $Trajets->lieu_darrivee = $request->input('lieu_darrivee');
   $Trajets->type_de_vehicule = $request->input('type_de_vehicule');
   $Trajets->matricule = $request->input('matricule');
   $Trajets->frais_transport = $request->input('frais_transport');
   $Trajets->image = $request->input('image');
   $Trajets->save();
   return redirect('/');
}


public function edit($id)
{
    $this->authorize('admin');

   $Trajets = \App\Trajet::find($id);//on recupere les Trajets


   return view('Trajets.edit', compact('Trajets'));

}


public function update(Request $request, $id){

   $Trajets = \App\Trajet::find($id);
   if($Trajets){

        $Trajets->prenom = $request->input('prenom');
        $Trajets->nom = $request->input('nom');
        $Trajets->votre_numero = $request->input('votre_numero');
        $Trajets->date_de_depart = $request->input('date_de_depart');
        $Trajets->lieu_de_depart = $request->input('lieu_de_depart');
        $Trajets->date_darrivee = $request->input('date_darrivee');
        $Trajets->lieu_darrivee = $request->input('lieu_darrivee');
        $Trajets->type_de_vehicule = $request->input('type_de_vehicule');
        $Trajets->matricule = $request->input('matricule');
        $Trajets->frais_transport = $request->input('frais_transport');
      //  $Trajets->image = $request->input('image');
        $Trajets->save();
    }
    return redirect('/Trajets');
 }




 public function suprimer($id)
{
    $this->authorize('admin');

$Trajets = \App\Trajet::find($id);
if($Trajets)
$Trajets->delete();
return redirect('/Trajets');
}

public function destroy($id)
{
$Trajets = \App\Trajet::find($id);
if($Trajets)
$Trajets->delete();
return redirect('/Trajets');
}

public function show($id){
   $Trajets = Trajet::find($id);
   return view("Trajets.show", compact('Trajets'));
   }



   public function __construct()
   {
   $this->middleware('auth');
   }


}
