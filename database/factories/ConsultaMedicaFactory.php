<?php

namespace Database\Factories;

use App\Models\ConsultaMedica;
use App\Models\Medico;
use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ConsultaMedica>
 */
class ConsultaMedicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = ConsultaMedica::class;
    public function definition(): array
    {
        $paciente = Paciente::all();
        $medico = Medico::all();
        return [
            //
  //Comprobar que el formato es correcto
            'fecha_hora' => $this->faker->dateTime(),            
            'medicos_id'=>fake()->numberBetween(1,$medico->count()),
            'pacientes_id'=>fake()->numberBetween(1,$paciente->count())

        ];
    }
}
