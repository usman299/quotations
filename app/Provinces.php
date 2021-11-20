<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    protected $fillable = [
        'nome', 'regione', 'codicelstat','note', 'dataTrasferimento', 'utente','dataultimaModifica', 
    ];

     
}
