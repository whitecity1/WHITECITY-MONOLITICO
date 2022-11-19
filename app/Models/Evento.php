<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Evento extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo('Appp\Models\User');
    }

   public function convenios(){
      return $this->belongsTo('App\Models\Convenio');
  }
}
