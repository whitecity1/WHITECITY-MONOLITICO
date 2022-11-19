<?php

namespace Database\Seeders;


use App\Models\Puntosatencion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PuntosAtencionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PuntosAtencion::factory(10)->create();
         
    }
}