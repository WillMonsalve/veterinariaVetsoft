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
                            'description' => 'Lista de categorias'])->syncRoles([$role1,$role2, $role3, $role4]);
        Permission::create(['name' => 'admin.categories.create',
                            'description' => 'crear categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit',
                            'description' => 'Editar categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy',
                            'description' => 'Eliminar categorias'])->syncRoles([$role1]);

        
        Permission::create(['name' => 'admin.tags.index',
                            'description' => 'Lista de etiquetas'])->syncRoles([$role1,$role2, $role3, $role4]);
        Permission::create(['name' => 'admin.tags.create',
                            'description' => 'Crear etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit',
                            'description' => 'Editar etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy',
                            'description' => 'Eliminar etiquetas'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.posts.index',
                            'description' => 'Lista de posts'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.posts.create',
                            'description' => 'Crear post'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.posts.edit',
                            'description' => 'Editar post'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.posts.destroy',
                            'description' => 'Eliminar post'])->syncRoles([$role1, $role2, $role3]);


        Permission::create(['name' => 'admin.users.index',
                            'description' => 'lista de usuarios'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Editar usuario'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.users.create',
                            'description' => 'Crear ususario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.show',
                            'description' => 'Ver detalle ususario'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.roles.index',
                            'description' => 'lista de roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit',
                            'description' => 'Editar roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create',
                            'description' => 'Crear roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.show',
                            'description' => 'Ver detalle roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy',
                            'description' => 'Eliminar roles'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.permissions.index',
                            'description' => 'lista de permisos'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.permissions.edit',
                            'description' => 'Editar permiso'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.permissions.create',
                            'description' => 'Crear permiso'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.permissions.show',
                            'description' => 'Ver detalle permiso'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.permissions.destroy',
                            'description' => 'Eliminar permiso'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.servicios.index',
                            'description' => 'lista de servicios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.servicios.create',
                            'description' => 'Crear servicios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.servicios.edit',
                            'description' => 'Editar servicios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.servicios.destroy',
                            'description' => 'Eliminar servicios'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.citas.index',
                            'description' => 'lista de citas'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.citas.create',
                            'description' => 'Crear citas'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.citas.edit',
                            'description' => 'Editar citas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.citas.show',
                            'description' => 'ver detalle citas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.citas.destroy',
                            'description' => 'Eliminar citas'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.agendas.index',
                            'description' => 'Dias de agendas'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.agendas.create',
                            'description' => 'Horario agenda'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.agendas.show',
                            'description' => 'Ver detalle agenda'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'admin.agendas.destroy',
                            'description' => 'Eliminar agenda'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.clientes.index',
                            'description' => 'lista de clientes'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.clientes.create',
                            'description' => 'Crear clientes'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.clientes.edit',
                            'description' => 'Editar clientes'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.clientes.show',
                            'description' => 'ver detalle clientes'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.clientes.destroy',
                            'description' => 'Eliminar clientes'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'admin.horarios.index',
                            'description' => 'Horario'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.horarios.create',
                            'description' => 'Agregar horario'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.horarios.edit',
                            'description' => 'Editar horario'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'admin.mascotas.index',
                            'description' => 'lista de mascotas'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.mascotas.create',
                            'description' => 'Crear mascotas'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.mascotas.edit',
                            'description' => 'Editar mascotas'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.mascotas.show',
                            'description' => 'ver detalle mascotas'])->syncRoles([$role1, $role2, $role3, $role4]);
        Permission::create(['name' => 'admin.mascotas.destroy',
                            'description' => 'Eliminar mascotas'])->syncRoles([$role1, $role2, $role3]);


    }
}
