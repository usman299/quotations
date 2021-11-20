<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Macrocategories extends Model
{
   protected $fillable = [
        'nome', 'dataTrasferimento', 'utente','dataultimaModifica', 
    ];

    
}
