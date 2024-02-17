<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CoverturaMedica;
use Illuminate\Support\Facades\DB;

class CoverturaMedicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coverturas_medicas')->truncate();
        CoverturaMedica::factory()->count(12)->create();
    }
}
