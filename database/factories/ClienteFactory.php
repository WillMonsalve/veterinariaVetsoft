<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    public function definition()
    {
        return [
           /*  'nombre' => $this->faker->word(20),
            'apellido' => $this->faker->word(20),
            'direccion' => $this->faker->address(),
            'cedula' => $this->faker->random(20),
            'edad' => $this->faker->random(20),
            'telefono' => $this->faker->word(20),
            'email' => $this->faker->unique()->safeEmail(),
            'user_id' => User::all()->random()->id */
        ];
    }
}
