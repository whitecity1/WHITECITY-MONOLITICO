<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    public function lugarturistico(){
        return $this->belongsTo('App\Models\Lugaresturistico');
    }
}
