<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
    //


    public function index(){
        return view("backoffice/index");
    }


public function show() {
    return view("backoffice.index");
  }
}



