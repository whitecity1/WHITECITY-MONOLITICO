<?php

namespace Database\Factories;

use App\Models\Estacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estacion>
 */
class EstacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Estacion::class;

    public function definition()
    {
        return [
            'estacion_servicio'=>$this->faker->name(),
            'imagen'=>$this->faker->imageUrl,
            'telefono'=>$this->faker->phoneNumber(),	
            'correo'=>$this->faker->email(),	
            'mun_ubicado'=>$this->faker->name(),	
            'direccion'=>$this->faker->name(),
            'apertura'=>$this->faker->time(),
            'cierre'=>$this->faker->time()
        ];
    }
}
