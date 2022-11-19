<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    use HasFactory;

    public function eventos(){
        return $this->hasMany('App\Models\Evento');
    }

    public function servicios(){
        return $this->hasMany('App\Models\Servicio');
   }

   public function tipoconvenio(){
    return $this->hasOne('App\Models\Tipo_Convenio');
   }

   public function lugaresturisticos(){
    return $this->hasMany('App\Models\LugaresTuristico');
   }

   public function user(){
    return $this->hasOne('App\Models\User');
}
}
