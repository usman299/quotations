<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nations', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('codiceCatastale');
            $table->string('XUE');
            $table->string('codicelStat');
            $table->string('prefissoTelefonico');
            $table->string('xBlackList');
            $table->string('codiceBlackList');
            $table->string('codicelSo3');
            $table->string('siglaAuto');
            $table->string('note');
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
        Schema::dropIfExists('nations');
    }
}
