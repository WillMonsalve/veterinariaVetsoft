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
            'name' => 'wilton',
            'apellido' => 'monsalve',
            'direccion' => 'calle 50 carrera 80',
            'cedula' => '71527119',
            'edad' => '36',
            'telefono' => '5599596',
            'email' => 'wmonsalve85@gmail.com',
            'estado' => '1',
            'password' => bcrypt('12345678'),
        ])/* ->assignRole('admin') */;

        User::factory(19)->create();
    }
}