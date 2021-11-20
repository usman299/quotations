<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $fillable = [
        'nome', 'sigla', 'note','dataTrasferimento', 'utente', 'dataultimaModifica',
    ];

   
}
