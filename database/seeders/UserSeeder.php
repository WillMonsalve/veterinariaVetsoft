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
            'email' => 'wmonsalve85@gmail.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('admin');

        User::factory(99)->create();
    }
}
