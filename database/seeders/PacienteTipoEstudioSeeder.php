<?php

namespace Database\Seeders;

use App\Models\TipoEstudio;
use App\Models\Paciente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PacienteTipoEstudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paciente_tipo_estudios')->truncate();
        $tipoEstudio = TipoEstudio::all()->pluck('id');//Solamente recupera la columna
        $pacientes = Paciente::inRandomOrder()->get();

        foreach($tipoEstudio as $tipoEstudio){
            foreach($pacientes as $paciente){
                DB::table('paciente_tipo_estudios')->insert([
                    'tipo_estudio_id' => $tipoEstudio,
                    'paciente_id' => $paciente->id,
                    'fecha' => now(),

                ]);
            }
        }
    }
}
