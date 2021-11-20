<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupings extends Model
{
    protected $fillable = [
        'nome', 'dataTrasferimento', 'utente','dataultimaModifica', 
    ];

}
