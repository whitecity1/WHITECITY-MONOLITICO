<?php

namespace Database\Seeders;

use App\Models\Ccomercial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CcomercialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ccomercial::factory(5)->create();
    }
}
