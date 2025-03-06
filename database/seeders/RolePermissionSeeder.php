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
        // Crear roles y asignar permisos

       $admin=Role::create(['name' => 'admin']);
       $user=Role::create(['name' => 'user']);


        // Crear permisos  para sede
        Permission::create(['name' => 'crear sede'])->assignRole([$admin]);
        Permission::create(['name' => 'editar sede'])->assignRole([$admin]);
        Permission::create(['name' => 'eliminar sede'])->assignRole([$admin]);
        Permission::create(['name' => 'ver sede'])->assignRole([$admin]);
        Permission::create(['name' => 'ver sede detalle'])->assignRole([$admin]);

        // Crear permisos  para area
        Permission::create(['name' => 'crear area'])->assignRole([$admin]);
        Permission::create(['name' => 'editar area'])->assignRole([$admin]);
        Permission::create(['name' => 'eliminar area'])->assignRole([$admin]);
        Permission::create(['name' => 'ver area'])->assignRole([$admin]);
        Permission::create(['name' => 'ver area detalle'])->assignRole([$admin]);

        // Crear permisos  para epp
        Permission::create(['name' => 'crear epp'])->assignRole([$admin]);
        Permission::create(['name' => 'editar epp'])->assignRole([$admin]);
        Permission::create(['name' => 'eliminar epp'])->assignRole([$admin]);
        Permission::create(['name' => 'ver epp'])->assignRole([$admin]);
        Permission::create(['name' => 'ver epp detalle'])->assignRole([$admin]);

        //
        Permission::create(['name' => 'crear solicitud']);
        Permission::create(['name' => 'guardar solicitud']);
        Permission::create(['name' => 'editar solicitud'])->assignRole([$admin]);
        Permission::create(['name' => 'eliminar solicitud'])->assignRole([$admin]);
        Permission::create(['name' => 'ver solicitud']);
        Permission::create(['name' => 'ver solicitud detalle'])->assignRole([$admin]);

        Permission::create(['name' => 'ver dashboard'])->assignRole([$admin, $user]);




    }

}
