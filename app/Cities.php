<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $fillable = [
        'nome', 'codiceCatastale', 'CAP','provincia', 'regione', 'prefissoTelefonico','codicelSTAT', 'nazione', 'note','CAPCittaProvincia', 'xHaStradario', 'xViaZona','dataTrasferimento', 'utente', 'dataultimaModifica',
    ];

    
}
