<?php

namespace Database\Seeders;

use App\Models\ConsultaMedica;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultaMedicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ConsultaMedica::factory(12)->create();
    }
}
