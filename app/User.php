<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'genre',
        'type_compte',
        'profession',
        'adresse',
        'telephone', 
        'email', 
        'password',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function location()
    {
        return $this->hasOne(Immeuble::class);
    }

    public function isAdmin()
    {
        return $this->role->title == "Administrateur";
    }

    public function isLocataire()
    {
        return $this->role->title == "Locataire";
    }

    public function isBailleurs()
    {
        return $this->role->title == "Bailleur";
    }
}
