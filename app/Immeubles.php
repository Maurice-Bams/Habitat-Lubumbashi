<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Immeubles extends Model
{
	protected $fillable = [
        'ville',
        'commune',
        'avenue',
        'numero',
        'type_usage',
        'superficie',
        'montant_garantie',
        'montant_loyer',
        'image',
        'description',
    ];
}
