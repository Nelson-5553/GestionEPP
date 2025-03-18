<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;
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

    public function updatesignature(Request $request, string $id)
    {
        // Validar la solicitud
        $request->validate([
            'signature' => 'required|string',
            'fileName' => 'required|string'
        ]);

        try {
            // Extraer los datos de la imagen base64
            $image_parts = explode(";base64,", $request->signature);
            $image_base64 = base64_decode($image_parts[1]);

            // Nombre del archivo
            $fileName = $request->fileName;

            // Guardar archivo en el storage
            Storage::disk('public')->put('Signature/' . $fileName, $image_base64);

            // Actualizar la columna signature del usuario existente
            $user = User::findOrFail($id);
            $user->signature = $fileName;
            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'Firma guardada correctamente',
                'file_name' => $fileName,
                'url' => Storage::url('Signature/' . $fileName),
                'redirect' => route('profile.show')
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al guardar la firma: ' . $e->getMessage()
            ], 500);
        }
        return redirect()->route('profile.show')->with('success');
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
