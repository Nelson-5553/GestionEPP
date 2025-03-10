<?php

namespace App\Http\Controllers;

use App\Models\Sede;
use App\Http\Requests\SedeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\error;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('ver sede');
        $Sede = Sede::all();
        return view('sede.SedeIndex', compact('Sede'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SedeRequest $request)
    {

        // Gate::authorize('crear sede');
        $Sede = new Sede();
        $Sede->name = $request->name;
        $Sede->direction = $request->direction;
        $Sede->description = $request->description;

        // Manejo correcto de la imagen
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Mover a la carpeta correcta
            $file->move(storage_path('app/public/sedes'), $filename);

            $Sede->image = $filename;
        } else {
            return back()->withErrors(['image' => 'Error al subir la imagen']);
        }

        // dd($Sede);
        $Sede->save();

        return redirect()->route('sede.index')->with('success', 'La sede fue creada con éxito');

    }


    /**
     * Display the specified resource.
     */
    public function show(Sede $sede)
    {
        Gate::authorize('ver sede detalle');
        return view('sede.SedeShow', compact('sede'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sede $sede)
    {
        return view('sede.SedeEdit', compact('sede'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sede $sede)
    {
        $request->validate([
            'name' => 'required',
            'direction' => 'required',
            'description' => 'max:255',
        ]);

        $sede->update($request->all());

        return redirect()->route('sede.index')
        ->with('success', 'Sede actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sede $sede)
    {
        Gate::authorize('eliminar sede');
        $sede->delete();

        return redirect()->route('sede.index')->with('success', 'La sede fue eliminada con éxito');
    }
}
