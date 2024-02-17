<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Paciente;
use App\Models\CoberturaMedica;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Paciente::class;

    public function definition(): array
    {
        $coberturaMedica = CoberturaMedica::all();

        return [

            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'tipo_doc' => $this->faker->word(),
            'nro_doc' => $this->faker->word(),
            'fecha_nac' => $this->faker->date(),
            'cobertura_medica_id'=>fake()->numberBetween(1,$coberturaMedica->count())

        ];
    }
}
