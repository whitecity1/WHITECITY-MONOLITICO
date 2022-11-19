<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Database\Eloquent\Builder;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombres',
        'apellidos',
        'documento',
        'direccion',
        'telefono',
        'email',
        'password',
        'tipo_persona_id',
        'notificacion_id',
    ];
   
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tipo_persona() {
        return $this->belongsTo('App\Models\Tipo_persona');
      }

    public function setPasswordAttribute($password){

        $this->attributes['password']=bcrypt($password);
    }
    public function notificacion(){
        return $this->belongsTo('App\Models\Notificacion');
    }

    public function eventos(){
        return $this->hasMany('App\Models\Evento');
    }
  
}
