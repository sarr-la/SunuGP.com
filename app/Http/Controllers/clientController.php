<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientController extends Controller
{
    public function client(){
            $client = \App\client::all();
            return view('Clients.client', compact('client'));
        }       
    

        public function index(){
            $client = \App\client::orderBy('created_at','DESC')->get();
            return view('Clients.client', compact('client'));
            }

        public function ajout(){

            return view('Clients.ajout');
        }
        

        public function store(Request $request)
        {
            $data = $request->validate([
                'prenom'=>'required|min:2',
                'nom' => 'required|min:2',
                ]);

                
                $client = new \App\client();
                $client->prenom = $request->input('prenom');
                $client->nom = $request->input('nom');
                $client->save();
               


                return redirect()->route('ajouter_client')->with(['success' => "client enregistré"]);

          
        }
    }