<?php

namespace Database\Seeders;

use App\Models\ConsultaMedica;
use App\Models\Medico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConsultaMedicaMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('consultas_medicas')->truncate();
        DB::table('medicos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Medico::factory()
            ->has(ConsultaMedica::factory()->count(3))
            ->count(12)
            ->create();
    }
}
