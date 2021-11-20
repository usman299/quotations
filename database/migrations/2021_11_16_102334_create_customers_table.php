<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
             $table->id();
             $table->string('nome');
             $table->string('nome1');
             $table->string('nome2');
             $table->string('partitaIVA');
             $table->string('codiceFiscale');
             $table->string('indrizzo');
             $table->string('numeroCivico');
             $table->string('citta');
             $table->string('cap');
             $table->string('provincia');
             $table->string('prefissoTelefono');
             $table->string('telefono');
             $table->string('localita');
             $table->string('prefissoFax');
             $table->string('fax');
             $table->string('celulare');
             $table->string('macroArea');
             $table->string('zona');
             $table->string('macroCategoria');
             $table->string('raggruppamento');
             $table->string('tipoSocieta');
             $table->string('categoria');
             $table->string('ABI');
             $table->string('CAB');
             $table->string('IBAN');
             $table->string('pagamento');
             $table->string('pagamento1');
             $table->string('pagamento2');
             $table->string('causaleTrasporto');
             $table->string('regione');
             $table->string('tipoClient');
             $table->string('sconto1');
             $table->string('sconto2');
             $table->string('note');
             $table->string('alAttenzione');
             $table->string('web');
             $table->string('detaCreazione');
             $table->string('nazione');
             $table->string('detiAggiuntiviCliente');
             $table->string('valuta');
             $table->string('detalnizloDisuso');
             $table->string('sePersonaFisica');
             $table->string('comuneNascita');
             $table->string('provinciaNascita');
             $table->string('dataNasta');
             $table->string('sesso');
             $table->string('sedeAmministrativa1');
             $table->string('sedeAmministrativa2');
             $table->string('sedeAmministrativa3');
             $table->string('sedeAmministrativa4');
             $table->string('seClienteK');
             $table->string('seClienteKBloccato');
             $table->string('detaTrasferimento');
             $table->string('utente');
             $table->string('dataUltimaModifica');
             $table->string('email');
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
        Schema::dropIfExists('customers');
    }
}
