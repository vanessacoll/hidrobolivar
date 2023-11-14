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
     */
    public function run(): void
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Periodista']);

        

        Permission::create(['name'=>'noticias.create','description'=>'Crear noticia'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'noticias.edit','description'=>'Editar noticia'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=>'noticias.destroy','description'=>'Eliminar noticia'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=>'permiso.index','description'=>'Ver usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'permiso.edit','description'=>'Editar usuario'])->syncRoles([$role1]);
        Permission::create(['name'=>'permiso.update','description'=>'Modificar usuario'])->syncRoles([$role1]);

        Permission::create(['name'=>'role.index','description'=>'Ver roles'])->syncRoles([$role1]);
        Permission::create(['name'=>'role.create','description'=>'Crear un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'role.show','description'=>'Mostrar un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'role.edit','description'=>'Editar un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'role.update','description'=>'Actualizar un rol'])->syncRoles([$role1]);
        Permission::create(['name'=>'role.destroy','description'=>'Eliminar un rol'])->syncRoles([$role1]);
        
        Permission::create(['name'=>'admin.periodista','description'=>'Ver boton cerrar sesion'])->syncRoles([$role1,$role2]);
    }
}
