<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    use HasFactory;

    public function lugaresturisticos(){
        return $this->belongsTo('App\Models\Lugaresuristico');
    }
}
