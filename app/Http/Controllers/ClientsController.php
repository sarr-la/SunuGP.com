<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function Clients(){
        $Clients = \App\Clients::orderBy('created_at')->get();
        return view('Clients.Clients', compact('Clients'));
     }

     public function create()
     {
        return view('create');
     }
     

     public function store(Request $request)
{
  
   $Clients = new Clients();
   $Clients->prenom = $request->input('prenom');
   $Clients->nom = $request->input('nom');
   $Clients->save();
   return redirect('/');
}


public function edit($id)
{
   $Clients = \App\Clients::find($id);//on recupere les clients
   return view('Clients.edit', compact('Clients'));
}


public function update(Request $request, $id){
    $Clients = \App\Clients::find($id);
    if($Clients){
        $Clients->prenom = $request->input('prenom');
        $Clients->nom = $request->input('nom');
        $Clients->save();
    }
    return redirect('/Clients');
 }
 

 public function suprimer($id)
{
$Clients = \App\Clients::find($id);
if($Clients)
$Clients->delete();
return redirect('/Clients');
}

}