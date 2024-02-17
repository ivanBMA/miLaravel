<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoEstudio;
use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Support\Facades\DB;

class MedicoPacienteTipoEstudiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $tipoEstudios = TipoEstudio::inRandomOrder()->get();
        $medicos = Medico::inRandomOrder()->get();
        $pacientes = Paciente::inRandomOrder()->get();

        //Creo 12 filas con cada fila con 3 id aleatorios y su fecha.
        for ($i=0; $i < 12; $i++) { 
            DB::table('medico_paciente_tipo_estudios')->insert([
                'medico_id' => $medicos[rand(0, 11)]->id,
                'paciente_id' => $pacientes[rand(0, 11)]->id,
                'tipo_estudio_id' => $tipoEstudios[rand(0, 11)]->id,
                'fecha_de_la_horden' => now(),
            ]);
        }

    }
}
