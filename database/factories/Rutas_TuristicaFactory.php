<?php

namespace Database\Factories;

use App\Models\Rutas_Turistica;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Rutas_TuristicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Rutas_Turistica::class;

    public function definition()
    {
        return [
            'ruta_turistica'=>$this->faker->name(),
            'descripcion'=>$this->faker->sentence(),
            'municipio_ubicada'=>$this->faker->name(),
            'direccion_ruta'=>$this->faker->name(),
            'contactos'=>$this->faker->phoneNumber(),
            'h_apertura'=>$this->faker->time(),
            'h_cierre'=>$this->faker->time(),
            'tipo_rutaTur'=>$this->faker->name(),
            'imagen'=>$this->faker->sentence()
        ];
    }
}
