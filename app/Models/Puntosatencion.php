<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntosatencion extends Model
{
    use HasFactory;

    public function puntosatencion(){
        return $this->hasMany('App\Models\Lugarturistico');
    }
}
