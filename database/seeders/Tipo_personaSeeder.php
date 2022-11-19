<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo_persona;

class Tipo_personaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $tipo_persona=new Tipo_persona();
            $tipo_persona->nombre='Usuario';
            $tipo_persona->save();

            $tipo_persona=new Tipo_persona();
            $tipo_persona->nombre='Administrador';
            $tipo_persona->save();
    }
}
