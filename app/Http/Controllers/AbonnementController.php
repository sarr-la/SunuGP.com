<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{


    public function expired(){
        $name = "Abdoulaye";
        $date = "22 - 01 -2020";
        Illuminate\Support\Facades\Mail::to('sarrabdoulayeyakhine7@gmail.com')->send(new AbonnementMail($name, $date));
        return "Message envoyé";
        }


}
