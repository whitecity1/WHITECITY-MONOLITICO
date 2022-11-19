<?php

namespace Database\Factories;

use App\Models\Categorizacion;

use Illuminate\Database\Eloquent\Factories\Factory;

class PuntosAtencionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nombre_puntoatencion'=> $this->faker->name(),
            'imagen'=>$this->faker->imageUrl(),
            'telefono'=> $this->faker->phoneNumber(),
            'correo'=> $this->faker->email(),
            'mun_ubicado'=>$this->faker->name(),
            'direccion'=>$this->faker->sentence(),
            'apertura'=>$this->faker->time(),
            'cierre'=>$this->faker->time(),

        ];
    }
}
