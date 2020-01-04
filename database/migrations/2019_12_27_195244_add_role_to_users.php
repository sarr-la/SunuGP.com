<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {


    });
}



public function isAdmin(){
    return strtolower(@$this->roles) === 'admin'? true : false;
    }
    /**Cett méthode va determiner si le user connecté a un role moderator*/
    public function isModerator(){
    return strtolower(@$this->roles) === 'moderator'? true : false;
    }

    
    


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
