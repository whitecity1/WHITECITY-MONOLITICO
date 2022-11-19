<?php

namespace Database\Seeders;
use App\Models\Fotografia;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FotografiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fotografia::factory(5)->create();
    }
}
