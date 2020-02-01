<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password','prenom','numero_de_telephone','adresse_exacte'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Trajet(){
        return $this->hasMany("App\Trajet");
 }





    /**Cette méthode va determiner si le user connecté a un role admin*/
    public function isAdmin(){
        return strtolower(@$this->roles) === 'admin'? true : false;
    }

    /**Cette méthode va determiner si le user connecté a un role user*/
    public function isUser(){
        return strtolower(@$this->roles) === 'user'? true : false;
    }

}
