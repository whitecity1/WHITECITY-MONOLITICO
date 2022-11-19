<?php

namespace Database\Factories;

use App\Models\Fotografia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fotografia>
 */
class FotografiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Fotografia::class;

    public function definition()
    {
        return [
            'imagen'=>$this->faker->imageUrl(),
            'nombre' =>$this->faker->name(),
            'descripcion' =>$this->faker->paragraph()
        ];
    }
}
