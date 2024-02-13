<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Especialidad;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

class EspecialidadSeeder extends Seeder
{
    /*
      Run the database seeds.
    DB::table('especialidades')->truncate();
    DB::table('especialidades')->truncate();
    DB::table('especialidades')->insert([
                'codigo' => random_int(100, 999),
                'descripcion' => Str::random(10),
            ]);
    Especialidad::factory()->count(12)->create();
    
     */
    public function run(): void
    {
        //DB::table('especialidades');
        //Especialidad::factory()->count(12)->create();

        Especialidad::factory(12)->create();
        
       
    }
}
