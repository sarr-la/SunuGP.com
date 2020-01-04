<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public function Reservation(){
        return $this->hasMany("App\reservation");
 }
}
