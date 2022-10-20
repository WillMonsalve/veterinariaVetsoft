<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           /*  'nombre' => $this->faker->word(20),
            'precio' => $this->faker->random_int(10, 20),
            'duracion' => $this->faker->date(10), */
        ];
    }
}
