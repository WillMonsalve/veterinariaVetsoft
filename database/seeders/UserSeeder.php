<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   
    public function run()
    {
        User::create([
            'name' => 'Fabiana',
            'apellido' => 'Loaiza',
            'direccion' => 'calle 50 carrera 80',
            'cedula' => '71527119',
            'edad' => '36',
            'telefono' => '5599596',
            'email' => 'fabiana.loaiza@misena.edu.co',
            'status' => '1',
            'password' => bcrypt('12345678'),
        ])->assignRole('Admin');

        User::factory(15)->create();
    }
}