<?php

namespace Database\Seeders;

use App\Models\Autoridad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutoridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autoridad::factory(5)->create();
    }
}
