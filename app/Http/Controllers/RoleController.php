<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('ver role');
        $roles = Role::all();
        return view('role.RoleIndex', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('crear role');
        $permissions = Permission::all();
        return view('role.RoleCreate', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('guardar role');
        $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'array' // Aseguramos que 'permissions' es un array
        ]);

        // Crear el rol
        $role = Role::create(['name' => $request->name]);

        // Sincronizar los permisos con el rol
        if ($request->has('permissions')) {
            $role->permissions()->sync($request->permissions);
        }

        return redirect()->route('role.index')->with('success', 'Rol creado correctamente');
    }


    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        Gate::authorize('ver role detalle');
        $role->load('permissions');
    return view('role.RoleShow', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        Gate::authorize('editar role');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        Gate::authorize('actualizar role');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        Gate::authorize('eliminar role');
    }
}
