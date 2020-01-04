<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationControler extends Controller
{
    public function information(){      
        return view('Information.Information');
    }       

}
