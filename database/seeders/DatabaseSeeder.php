<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Medico;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        $tablas = [
            "cobertura_medicas" , "consulta_medicas", "especialidads", 
            "medicos", "medico_pacientes", "medico_paciente_tipo_estudios", 
            "pacientes", "paciente_tipo_estudios", "tipo_estudios"
        ];
        Schema::disableForeignKeyConstraints();
        foreach ($tablas as $tabla) {
            DB::table($tabla)->truncate();
        }
        Schema::enableForeignKeyConstraints();

        $this->call(CoberturaMedicaSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(MedicoSeeder::class);
        $this->call(PacienteSeeder::class);
        $this->call(ConsultaMedicaSeeder::class);
        $this->call(TipoEstudioSeeder::class);
        $this->call(MedicoPacienteSeeder::class);
        $this->call(PacienteTipoEstudioSeeder::class);
        $this->call(MedicoPacienteTipoEstudiosSeeder::class);

      
        
    }
}
