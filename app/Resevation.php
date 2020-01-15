<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resevation extends Model
{
    public function client(){
        return $this->belongsTo('App\client');
 }

 public function trajet(){
    return $this->belongsTo('App\trajet');
 }

    public function __construct()
    {
        $this->middleware('auth');
    }

}


