<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuotesDetails extends Model
{
    protected $fillable = [
        'idpreventivo', 'prezzo', 'areaText',
    ];

    
}
