<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Immeubles extends Model
{
	protected $fillable = [
        'ville',
        'commune',
        'quartier',
        'avenue',
        'numero',
        'type_usage',
        'nombre_piece',
        'superficie',
        'montant_garantie',
        'montant_loyer',
        'image',
        'description',
    ];
}
