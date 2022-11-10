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
            'nombre' => $this->faker->name(20),
            'apellido' => $this->faker->lastName(),
            'direccion' => $this->faker->address(),
            'cedula' => $this->faker->randomNumber(9, true),
            'edad' => $this->faker->randomDigit(),
            'telefono' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'user_id' => User::all()->random()->id
        ];
    }
}
