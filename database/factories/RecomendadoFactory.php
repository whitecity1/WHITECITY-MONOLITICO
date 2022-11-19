<?php

namespace Database\Factories;
use App\Models\Recomendado;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recomendado>
 */
class RecomendadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    protected $model = Recomendado::class;

    public function definition()
    {
        return [
            'lugar_recomendado'=>$this->faker->name(), 
            'resenahistorica'=>$this->faker->sentence(), 
            'calificaciones'=>$this->faker->name(5), 
            'imagen'=>$this->faker->imageUrl()
        ];
    }
}
