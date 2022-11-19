<?php

namespace Database\Factories;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Evento::class;

    public function definition()
    {
        return [
            'evento'=> $this->faker->sentence(),
            'municipio'=> $this->faker->sentence(),
            'direccion'=> $this->faker->sentence(),
            'horarios'=>$this->faker->time(),
            'fecha_inicio'=>$this->faker->date(),
            'fecha_fin'=>$this->faker->date(),
            'descripcion'=>$this->faker->paragraph(),
            'tipo_evento'=>$this->faker->sentence(),
           'user_id' =>User::inRandomOrder()->first()->id,
            'imagen'=>$this->faker->sentence(),
        ];
    }
}
