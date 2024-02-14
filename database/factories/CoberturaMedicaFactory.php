<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CoberturaMedica;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoberturaMedica>
 */
class CoberturaMedicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CoberturaMedica::class;
    public function definition(): array
    {
        return [
            'codigo' => $this->faker->unique()->numberBetween(111111111,999999999),
            'descripcion' => $this->faker->word()
        ];
    }
}
