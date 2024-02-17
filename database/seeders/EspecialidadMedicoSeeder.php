<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;
use App\Models\Medico;
use Illuminate\Support\Facades\DB;


class EspecialidadMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('especialidades')->truncate();
        DB::table('medicos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Especialidad::factory()
            ->has(Medico::factory()->count(3))
            ->count(12)
            ->create();
    }
}
