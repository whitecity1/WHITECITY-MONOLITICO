<?php

namespace Database\Seeders;

use App\Models\Lugarturistico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LugarturisticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lugarturistico::factory(5)->create();
    }
}
