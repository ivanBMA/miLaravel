<?php

namespace Database\Seeders;

use App\Models\Paciente;
use App\Models\ConsultaMedica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ConsultaMedicaPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('consultas_medicas')->truncate();
        DB::table('pacientes')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        Paciente::factory()
            ->has(ConsultaMedica::factory()->count(3))
            ->count(12)
            ->create();
    }
}
