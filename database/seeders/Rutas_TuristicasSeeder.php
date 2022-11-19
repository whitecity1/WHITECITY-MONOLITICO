<?php

namespace Database\Seeders;

use App\Models\Rutas_Turistica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Rutas_TuristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rutas_Turistica::factory(5)->create();
           
    }
}
