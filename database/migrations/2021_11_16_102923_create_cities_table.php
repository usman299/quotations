<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
              $table->string('nome');
              $table->string('codiceCatastale');
             $table->string('CAP');
             $table->string('provincia');
             $table->string('regione');
              $table->string('prefissoTelefonico');
             $table->string('codicelSTAT');
             $table->string('nazione');
             $table->string('note');
             $table->string('CAPCittaProvincia');
             $table->string('xHaStradario');
             $table->string('xViaZona');
             $table->string('dataTrasferimento');
             
              $table->string('utente');
             $table->string('dataultimaModifica');
             
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
        Schema::dropIfExists('cities');
    }
}
