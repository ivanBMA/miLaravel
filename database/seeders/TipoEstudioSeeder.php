<?php

namespace Database\Seeders;

use App\Models\Tipoestudio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TipoEstudio::factory(12)->create();
    }
}
