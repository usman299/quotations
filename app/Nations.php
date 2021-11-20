<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nations extends Model
{
   protected $fillable = [
        'nome', 'codiceCatastale', 'XUE','codicelStat', 'prefissoTelefonico', 'xBlackList','codiceBlackList', 'codicelSo3', 'siglaAuto','note', 'dataTrasferimento', 'utente','dataultimaModifica', 
    ];

     
}
