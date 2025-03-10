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
       $supervisor=Role::create(['name' => 'supervisor']);
       $user=Role::create(['name' => 'user']);


        // Crear permisos  para sede
        Permission::create(['name' => 'crear sede']);
        Permission::create(['name' => 'editar sede']);
        Permission::create(['name' => 'actualizar sede']);
        Permission::create(['name' => 'eliminar sede']);
        Permission::create(['name' => 'ver sede']);
        Permission::create(['name' => 'ver sede detalle']);

        // Crear permisos  para area
        Permission::create(['name' => 'crear area']);
        Permission::create(['name' => 'editar area']);
        Permission::create(['name' => 'actualizar area']);
        Permission::create(['name' => 'eliminar area']);
        Permission::create(['name' => 'ver area']);
        Permission::create(['name' => 'ver area detalle']);

        // Crear permisos  para epp
        Permission::create(['name' => 'crear epp'])->assignRole([$supervisor]);
        Permission::create(['name' => 'editar epp'])->assignRole([$supervisor]);
        Permission::create(['name' => 'actualizar epp'])->assignRole([$supervisor]);
        Permission::create(['name' => 'eliminar epp'])->assignRole([$supervisor]);
        Permission::create(['name' => 'ver epp'])->assignRole([$supervisor]);
        Permission::create(['name' => 'ver epp detalle'])->assignRole([$supervisor]);

        //Crear permisos  para solicitud
        Permission::create(['name' => 'crear solicitud'])->assignRole([$supervisor, $user]);
        Permission::create(['name' => 'guardar solicitud'])->assignRole([$supervisor, $user]);
        Permission::create(['name' => 'editar solicitud'])->assignRole([$supervisor]);
        Permission::create(['name' => 'actualizar solicitud'])->assignRole([$supervisor]);
        Permission::create(['name' => 'eliminar solicitud'])->assignRole([$supervisor]);
        Permission::create(['name' => 'ver solicitud'])->assignRole([$supervisor, $user]);
        Permission::create(['name' => 'ver solicitud detalle'])->assignRole([$supervisor]);

        //Crear permisos para entrega
        Permission::create(['name' => 'crear entrega'])->assignRole([$supervisor, $user]);
        Permission::create(['name' => 'guardar entrega'])->assignRole([$supervisor, $user]);
        Permission::create(['name' => 'editar entrega'])->assignRole([$supervisor]);
        Permission::create(['name' => 'actualizar entrega'])->assignRole([$supervisor]);
        Permission::create(['name' => 'eliminar entrega'])->assignRole([$supervisor]);
        Permission::create(['name' => 'ver entrega'])->assignRole([$supervisor, $user]);
        Permission::create(['name' => 'ver entrega detalle'])->assignRole([$supervisor, $user]);

        Permission::create(['name' => 'ver dashboard'])->assignRole([$admin, $user, $supervisor]);


        $admin->givePermissionTo(Permission::all());


    }

}
