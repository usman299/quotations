<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymentmethods extends Model
{
    protected $fillable = [
        'nome', 'nome2', 'dataTrasferimento','dataultimaModifica', 'utente', 
    ];

    
}
