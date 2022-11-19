<?php

namespace Database\Factories;

use App\Models\Ccomercial;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ccomercial>
 */
class CcomercialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Ccomercial::class;

    public function definition()
    {
        return [
            'centrocomercial'=>$this->faker->name(),	
            'imagen'=>$this->faker->imageUrl(), 
            'telefono'=>$this->faker->phoneNumber(), 
            'correo'=>$this->faker->email(), 
            'municipio'=>$this->faker->name(), 
            'direccion'=>$this->faker->sentence(),
            'apertura'=>$this->faker->time(),
            'cierre'=>$this->faker->time()
        ];
    }
}
