<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function Contact(){
    $Contact = \App\Contact::orderBy('created_at')->get();
    return view('Contact.Contact', compact('Contact'));
 }

 public function create()
 {
    return view('Contact.create');
 }
    public function ajout(){

        return view('Contact.ajout');
    }
    

public function store(Request $request){

    $Contact = new \App\Contact();
    $Contact->prenom = $request->input('prenom');
    $Contact->nom = $request->input('nom');
    $Contact->email = $request->input('email');
    $Contact->votre_sujet = $request->input('votre_sujet');
    $Contact->votre_message = $request->input('votre_message');
$Contact->save();
return redirect('/');
}

}

