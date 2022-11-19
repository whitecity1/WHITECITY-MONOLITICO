<?php

namespace Database\Factories;

use App\Models\Convenio;
use App\Models\Tipo_Convenio;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convenio>
 */
class ConvenioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Convenio::class;

    public function definition()
    {
        return [
            'fecha_firma'=>$this->faker->date(),	
            'fecha_finalizacion'=>$this->faker->date(),	
            'observaciones'=>$this->faker->sentence(),
            'tipo__convenio_id' =>Tipo_Convenio::inRandomOrder()->first()->id,	
            'user_id' =>User::inRandomOrder()->first()->id
        ];
    }
}
