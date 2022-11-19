<?php

namespace Database\Factories;

use App\Models\Rutas_Acceso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Rutas_AccesoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @return array<string, mixed>
     */

     protected $model = Rutas_Acceso::class;

    public function definition()
    {
        return [
            'empresa_transporte' =>$this->faker->name(),
            'mun_ubicacion' =>$this->faker->name(),
            'inicio_atencion' =>$this->faker->time(),
            'cierre_atencion' =>$this->faker->time(),
            'direccion_empresa' =>$this->faker->email(),	
            'contacto'=>$this->faker->phoneNumber(),	
            'correo_empresa'=>$this->faker->email(),	
            'tipo_ruta'=>$this->faker->name(),	
            'imagen'=>$this->faker->sentence()
        ];
    }
}
