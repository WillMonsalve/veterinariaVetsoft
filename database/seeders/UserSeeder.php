<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'jorge',
            'email' => 'jmarias073@misena.edu.co',
            'password' => bcrypt('jorge123456')
        ])->assignRole('admin');

        User::factory(99)->create();
    }
}
