<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class trajetController extends Controller
{

    public function trajet(){
        $trajet = \App\Trajet::all();
        return view('Trajets.trajet', compact('trajet'));
    }


    public function index(){
        $trajet = \App\Trajet::orderBy('created_at','DESC')->get();
        return view('Trajets.trajet', compact('trajet'));

        $trajet = \App\Trajet::orderBy('created_at', 'DESC')->get();
    }

    public function ajout(){

        return view('Trajets.ajout');
    }


    public function store(Request $request)
{


        $data = $request->validate([
            'prenom' => 'required|min:2|string',
            'nom' => 'required|min:2|string',
            'votre_numero' => 'required|min:9|numeric',
            'date_de_depart' => 'required|min:1|date',
            'lieu_de_depart' => 'required|min:2|string',
            'date_darrivee'=>'required|min:1|date',
            'lieu_darrivee'=>'required|min:2|string',
            'type_de_vehicule'=>'required|min:2|string',
            'matricule'=>'required|min:7|string',
            "trajet_image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
            ]);

            $trajet = new \App\Trajet();
            //On verfie si une image est envoyée
            if($request->has('trajet_image')){
            //On enregistre l'image dans un dossier
            $image = $request->file('trajet_image');
            //Nous allons definir le nom de notre image en combinant le nom du trajet et un timestamp

            $image_name = Str::slug($request->input('name')).'_'.time();
            //Nous enregistrerons nos fichiers dans /uploads/images dans public
            $folder = '/uploads/images/';
            //Nous allons enregistrer le chemin complet de l'image dans la BD
            $trajet->image = $folder.$image_name.'.'.$image->getClientOriginalExtension();
            //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la methode  uploadImage();

            $this->uploadImage($image, $folder, 'public', $image_name);
            }

            $trajet->prenom = $request->input('prenom');
            $trajet->nom = $request->input('nom');
            $trajet->votre_numero = $request->input('votre_numero');
            $trajet->date_de_depart = $request->input('date_de_depart');
            $trajet->lieu_de_depart = $request->input('lieu_de_depart');
            $trajet->date_darrivee = $request->input('date_darrivee');
            $trajet->lieu_darrivee = $request->input('lieu_darrivee');
            $trajet->type_de_vehicule = $request->input('type_de_vehicule');
            $trajet->matricule = $request->input('matricule');
            //$trajet->image = $request->input('');
            $trajet->user_id = 1;
            $trajet->save();
            return redirect()->route('ajouter_trajet')->with(['success' => "trajet enregistré"]);

        }


    public function uploadImage(UploadedFile $uploadedFile, $folder =
null, $disk = 'public', $filename = null){
$name = !is_null($filename) ? $filename : str_random('25');
$file = $uploadedFile->storeAs($folder,
$name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
return $file;
}


public function update(Request $request, $id)
{
    $data = $request->validate([
        'prenom' => 'required|min:2|string',
        'nom' => 'required|min:2|string',
        'votre_numero' => 'required|min:9|numeric',
        'date_de_depart' => 'required|min:1|date',
        'lieu_de_depart' => 'required|min:2|string',
        'date_darrivee'=>'required|min:1|date',
        'lieu_darrivee'=>'required|min:2|string',
        'type_de_vehicule'=>'required|min:2|string',
        'matricule'=>'required|min:7|string',
        "trajet_image" => 'nullable | image | mimes:jpeg,png,jpg,gif | max: 2048'
]);
$trajet = \App\Trajet::find($id);
if($trajet){
if($request->has('trajet_image')){
//On enregistre l'image dans une variable
$image = $request->file('trajet_image');
if(file_exists(public_path().$trajet->image))//On verifie si le fichier existe
Storage::delete(asset($trajet->image));//On le supprime alors
//Nous enregistrerons nos fichiers dans /uploads/images dans public
$folder = '/uploads/images/';
$image_name = Str::slug($request->input('name')).'_'.time();
$trajet->image =
$folder.$image_name.'.'.$image->getClientOriginalExtension();
//Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
$this->uploadImage($image, $folder, 'public', $image_name);
}

$Trajets->prenom = $request->input('prenom');
$Trajets->nom = $request->input('nom');
$Trajets->votre_numero = $request->input('votre_numero');
$Trajets->date_de_depart = $request->input('date_de_depart');
$Trajets->lieu_de_depart = $request->input('lieu_de_depart');
$Trajets->date_darrivee = $request->input('date_darrivee');
$Trajets->lieu_darrivee = $request->input('lieu_darrivee');
$Trajets->type_de_vehicule = $request->input('type_de_vehicule');
$Trajets->matricule = $request->input('matricule');
//  $Trajets->image = $request->input('image');



$Trajets->save();
}
return redirect('/Trajets');
}


public function __construct()
{
$this->middleware('auth');
}


}
