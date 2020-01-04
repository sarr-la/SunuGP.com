<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{

    public function Reservation(){
        return $this->hasMany("App\Reservation");
 }



public function Users(){
    return $this->belongsTo("App\User");
 }





 
}
