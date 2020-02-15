<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('votre_numero');
            $table->dateTime('date_de_depart');
            $table->string('lieu_de_depart');
            $table->dateTime('date_darrivee');
            $table->string('lieu_darrivee');
            $table->string('type_de_vehicule');
            $table->string('matricule');
            $table->string('frais_transport');
            $table->string('image');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trajets');
    }
}
