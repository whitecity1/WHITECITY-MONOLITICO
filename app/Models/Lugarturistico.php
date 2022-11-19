<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugarturistico extends Model
{
    use HasFactory;

       public function restaurantes() {
        return $this->hasMany('App\Models\Restaurante');
      }

      public function hoteles() {
        return $this->hasMany('App\Models\Hotel');
      }

      public function ccomerciales() {
        return $this->hasMany('App\Models\Ccomercial');
      }

      public function estacioneservicio() {
        return $this->hasMany('App\Models\Estacion');
      }

      public function puntosatencion() {
        return $this->hasMany('App\Models\Puntosatencion');
      }

      public function autoridades() {
        return $this->hasMany('App\Models\Autoridad');
      }
    public function recomendados(){
        return $this->hasMany('App\Models\Recomendado');
   }

   public function fotografias(){
    return $this->hasMany('App\Models\Fotografia');
   }
     
   public function eventos(){
    return $this->hasMany('App\Models\Evento');
   }
   
   public function convenios(){
    return $this->belongsTo('App\Models\Convenio');
}

public function rutasturistica(){
    return $this->hasMany('App\Models\Rutas_Turistica');
   }

public function rutasacceso(){
    return $this->hasMany('App\Models\Rutas_Acceso');
   }
}
