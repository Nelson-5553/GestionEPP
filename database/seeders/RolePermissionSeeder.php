<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

       $admin=Role::create(['name' => 'admin']);
       $user=Role::create(['name' => 'user']);


        // Crear permisos  para sede
        Permission::create(['name' => 'crear sede'])->assignRole([$admin]);
        Permission::create(['name' => 'editar sede'])->assignRole([$admin]);
        Permission::create(['name' => 'eliminar sede'])->assignRole([$admin]);
        Permission::create(['name' => 'ver sede'])->assignRole([$admin]);

        Permission::create(['name' => 'ver dashboard'])->assignRole([$admin, $user]);
        // Crear roles y asignar permisos




    }

}
