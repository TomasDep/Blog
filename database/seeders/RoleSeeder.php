<?php

namespace Database\Seeders;

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
        $role2 = Role::create(['name' => 'Blogger']);

        // Permiso para visualizar el dashboard
        Permission::create(['name' => 'admin.home',
                            'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);

        // Permiso para ver listado de usuarios
        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1]);

        // Permiso para asiganar roles
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);

        /*Permission::create(['name' => 'admin.users.update',
                            'description' => ''])->syncRoles([$role1]);*/

        // Permisos para administrar las categorias
        Permission::create(['name' => 'admin.categories.index',
                            'description' => 'Ver listado de categorias'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.categories.create',
                            'description' => 'Crear categorias'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.edit',
                            'description' => 'Editar categorias'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.categories.destroy',
                            'description' => 'Eliminar categorias'])->syncRoles([$role1]);

        //Permisos para administrar las etiquetas
        Permission::create(['name' => 'admin.tags.index',
                            'description' => 'Ver listado de etiquestas'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.tags.create',
                            'description' => 'Crear una etiqueta'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.edit',
                            'description' => 'Editar una etiqueta'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.destroy',
                            'description' => 'Eliminar una etiqueta'])->syncRoles([$role1]);

        // Permisos para admininstrar los posts
        Permission::create(['name' => 'admin.posts.index',
                            'description' => 'Ver listado de posts'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.posts.create',
                            'description' => 'Crear un posts'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.posts.edit',
                            'description' => 'Editar un posts'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.posts.destroy',
                            'description' => 'Eliminar un posts'])->syncRoles([$role1, $role2]);
    }
}
