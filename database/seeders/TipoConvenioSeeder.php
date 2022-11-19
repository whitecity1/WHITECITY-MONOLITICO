<?php

namespace Database\Seeders;

use App\Models\Tipo_Convenio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoConvenioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_Convenio::factory(5)->create();
    }
}
