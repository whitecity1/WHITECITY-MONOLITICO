<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_persona extends Model
{
    protected $fillable = [
        'nombre',
    ];
    use HasFactory;
    public function users(){
        return $this->hasMany('App\Models\User');
    }
}
