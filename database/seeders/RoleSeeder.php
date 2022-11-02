<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'veterinario']);
        $role3 = Role::create(['name' => 'asistente']);
        $role4 = Role::create(['name' => 'cliente']);

        Permission::create(['name' => 'admin.home',
                            'description' => 'Ver dashboard'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.servicios.index',
                            'description' => 'Ver listado de servicios'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.servicios.create',
                            'description' => 'Crear servicios'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.servicios.edit',
                            'description' => 'Editar servicios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.servicios.destroy',
                            'description' => 'Eliminar servicios'])->syncRoles([$role1, $role2]);

        //lo mismo para las demas entidades
    }
}
