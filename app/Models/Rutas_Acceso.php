<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutas_Acceso extends Model
{
    use HasFactory;

    public function lugaresturistico(){
        return $this->belongsTo('App\Models\LugaresTuristico');
    }

    
}
