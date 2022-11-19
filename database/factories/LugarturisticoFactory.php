<?php

namespace Database\Factories;

use App\Models\Autoridad;
use App\Models\Ccomercial;
use App\Models\Estacion;
use App\Models\Hotel;
use App\Models\Puntosatencion;
use App\Models\Recomendado;
use App\Models\Restaurante;
use App\Models\Rutas_Acceso;
use App\Models\Rutas_Turistica;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lugarturistico>
 */
class LugarturisticoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lugar_turistico'=>$this->faker->name(),	
            'imagen'=>$this->faker->sentence(),
            'detalles'=>$this->faker->sentence(),
            'horario_apertura'=>$this->faker->time(),	
            'horario_cierre'=>$this->faker->time(),	
            'municipio'=>$this->faker->name(),	
            'direccion'=>$this->faker->name(),	
            'telefono'=>$this->faker->phoneNumber(),
            'correo_electronico'=>$this->faker->email(),	
            'tipo_lugar'=>$this->faker->name(),	
            'restaurante_id'=>Restaurante::inRandomOrder()->first()->id,	
            'hotel_id'=>Hotel::inRandomOrder()->first()->id,	
            'ccomercial_id'=>Ccomercial::inRandomOrder()->first()->id,	
            'estacion_id'=>Estacion::inRandomOrder()->first()->id,	
            'autoridad_id'=>Autoridad::inRandomOrder()->first()->id,	
            'puntosatencion_id'=>Puntosatencion::inRandomOrder()->first()->id,	
            'recomendado_id'=>Recomendado::inRandomOrder()->first()->id,	
            'rutas__acceso_id'=>Recomendado::inRandomOrder()->first()->id,
            'rutas__turistica_id'=>Recomendado::inRandomOrder()->first()->id
           
        ];
    }
}
