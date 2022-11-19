<?php

namespace Database\Factories;

use App\Models\Restaurante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurante>
 */
class RestauranteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Restaurante::class;

    public function definition()
    {
        return [
            'restaurante'=>$this->faker->name(),	
            'imagen'=>$this->faker->sentence(), 
            'telefono'=>$this->faker->phoneNumber(), 
            'correo'=>$this->faker->email(), 
            'mun_ubicado'=>$this->faker->name(), 
            'direccion'=>$this->faker->name(),	
            'apertura'=>$this->faker->time(),	
            'cierre'=>$this->faker->time()
        ];
    }
}
