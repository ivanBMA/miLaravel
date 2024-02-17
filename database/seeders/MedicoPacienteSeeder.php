<?php

namespace Database\Seeders;

use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicoPacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medico_pacientes')->truncate();
        $medicos = Medico::all()->pluck('id');//Solamente recupera la columna
        $pacientes = Paciente::inRandomOrder()->get();

        foreach($medicos as $medico){
            foreach($pacientes as $paciente){
                DB::table('medico_pacientes')->insert([
                    'medico_id' => $medico,
                    'paciente_id' => $paciente->id,
                    'fecha_hora' => now(),

                ]);
            }
        }
    }
}
