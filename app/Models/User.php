<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // creazione della relazione con user
    // da posts si deve impostare la foreign key.
    // mettere con accuratezza la giusta path a cui
    // punta, per sicurezza controllare nella gerarchia
    // delle folders

    // la funzione deve avere il nome della tabella
    // a cui la classe Model punta

    public function posts(){
        return $this->hasMany("App\Models\posts");
    }


}
