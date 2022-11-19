<?php

namespace Database\Seeders;

use App\Models\Recomendado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecomendadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Recomendado::factory(5)->create();
    }
}
