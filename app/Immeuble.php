<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    const VERIFIED_IMMEUBLE = '1';
    const UNVERIFIED_IMMEUBLE = '0';

    protected $table = "immeubles";

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
        'verified'
    ];

    public function getAdresseAttribute()
    {
        // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'
        return "{$this->numero}, {$this->avenue}, {$this->quartier}/{$this->ville}";
    }
}
