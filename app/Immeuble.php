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
        'nombre_pieces',
        'superficie',
        'montant_garantie',
        'montant_loyer',
        'image',
        'description',
        'verified',
        'user_id',
        'bailleur_id'
    ];

    public function getAdresseAttribute()
    {
        // '8888 Cummings Vista Apt. 101, Susanbury, NY 95473'
        return "{$this->numero}, {$this->avenue}, {$this->quartier}/{$this->ville}";
    }

    public function locataire()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function bailleur()
    {
        return $this->belongsTo(User::class, 'bailleur_id');
    }

    public function getImpotGarantieAttribute(){
        return ($this->attributes['montant_garantie'] * 20) / 100;
    }

    public function getImpotLoyerAttribute(){
        return ($this->attributes['montant_loyer'] * 15) / 100;
    }
}
