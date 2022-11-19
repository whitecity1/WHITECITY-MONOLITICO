<?php

namespace Database\Factories;

use App\Models\Autoridad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autoridad>
 */
class AutoridadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Autoridad::class;

    public function definition()
    {
        return [
        'nombre_entidad'=>$this->faker->name(),
        'imagen'=>$this->faker->imageUrl(), 
        'telefono'=>$this->faker->phoneNumber(), 
        'correo'=>$this->faker->email(), 
        'mun_ubicado'=>$this->faker->name(), 
        'direccion'=>$this->faker->name(),
        'apertura'=>$this->faker->time(),	
        'cierre'=>$this->faker->time()
        ];
    }
}
