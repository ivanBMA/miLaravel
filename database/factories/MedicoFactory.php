<?php

namespace Database\Factories;

use App\Models\Especialidad;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $especialidad = Especialidad::all();
        return [
            //
            'Matricula' => $this->faker->text(10),
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'especialidad_id'=>fake()->numberBetween(1,$especialidad->count())

           
        ];
    }
}
