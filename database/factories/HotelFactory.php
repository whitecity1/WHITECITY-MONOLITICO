<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Hotel::class;

    public function definition()
    {
        return [
        'hotel'=> $this->faker->name(),
        'imagen'=> $this->faker->imageUrl(), 
        'telefono'=> $this->faker->phoneNumber(), 
        'correo'=> $this->faker->email(), 
        'mun_ubicado'=> $this->faker->name(), 
        'direccion'=> $this->faker->name(),	
        'apertura' => $this->faker->time(),	
        'cierre'=> $this->faker->time()

     ];
    }
}
