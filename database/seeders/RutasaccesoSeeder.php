<?php

namespace Database\Seeders;
use App\Models\Rutas_Acceso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RutasaccesoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rutas_Acceso::factory(5)->create();
    }
}
