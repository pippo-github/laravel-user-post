<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    // creazione della relazione con user
    // da user si deve impostare la foreign key.
    // mettere con accuratezza la giusta path a cui
    // punta, per sicurezza controllare nella gerarchia
    // delle folders
    
    // la funzione deve avere il nome della tabella
    // a cui la classe Model punta

    public function user(){
        return $this->belongTo("App\Models\User");
    }


}
