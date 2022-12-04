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
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Veterinario']);
        $role3 = Role::create(['name' => 'Asistente']);
        $role4 = Role::create(['name' => 'Cliente']);
        

        Permission::create(['name' => 'admin.home',
                            'description' => 'Ver dashboard'])->syncRoles([$role1, $role2, $role3, $role4]);


        Permission::create(['name' => 'admin.categories.index',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.create',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);

        
        Permission::create(['name' => 'admin.tags.index',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.create',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy',
                            'description' => 'Ver dashboard'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.posts.index',
                            'description' => 'Ver dashboard'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create',
                            'description' => 'Ver dashboard'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit',
                            'description' => 'Ver dashboard'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy',
                            'description' => 'Ver dashboard'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update',
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.servicios.index',
                            'description' => 'Ver listado de servicios'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.servicios.create',
                            'description' => 'Crear servicios'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.servicios.edit',
                            'description' => 'Editar servicios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.servicios.destroy',
                            'description' => 'Eliminar servicios'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.citas.index',
                            'description' => 'Ver listado de citas'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.citas.create',
                            'description' => 'Crear citas'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.citas.edit',
                            'description' => 'Editar citas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.citas.destroy',
                            'description' => 'Eliminar citas'])->syncRoles([$role1, $role2]);

        //lo mismo para las demas entidades
    }
}
