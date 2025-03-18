<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('ver usuario');
        return view('user.UserIndex');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('crear usuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('guardar usuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        Gate::authorize('ver usuario detalle');
        return view('user.UserShow', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        Gate::authorize('editar usuario');
        $roles = Role::all();
        return view('user.UserEdit', compact('user', 'roles'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function updaterole(Request $request, string $id)
    {
        Gate::authorize('actualizar usuario');
        // Validar que el rol enviado existe en la tabla de roles
        $request->validate([
            'role' => 'required|exists:roles,id',
        ]);

        // Encontrar el usuario por ID
        $user = User::findOrFail($id);

        // Obtener el rol seleccionado
        $roleId = $request->input('role');

        // Obtener el nombre del rol basado en su ID
        $roleName = Role::findOrFail($roleId)->name;

        // Sincronizar el rol del usuario (elimina el anterior y asigna el nuevo)
        $user->syncRoles([$roleName]);

        return redirect()->route('user.index')->with('success', 'Rol actualizado correctamente');
    }

    public function updatesignature(Request $request, string $id){

        // $request->validate([
        //     'signature' => 'required',
        // ]);
        // $sede->update($request->all());

        // return redirect()->route('sede.index')
        // ->with('success');
    }
    public function editsignature(User $user){

        return view('profile.SignatureEdit', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gate::authorize('eliminar usuario');
    }
}
