<?php

namespace App\Http\Controllers;

use App\Http\Requests\EppRequest;
use App\Models\Epp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class EppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('ver epp');
        return view('epp.EppIndex');
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

public function store(EppRequest $request)
{
    $Epp = new Epp();

    // Tomar registros de los inputs
    $Epp->name = $request->name;
    $Epp->cantidad = $request->cantidad;
    $Epp->unity = $request->unity;
    $Epp->description = $request->description;

    // Subir imagen a S3
    if ($request->hasFile('image')) {
        $file = $request->file('image');

        // Subimos la imagen a S3 en la carpeta 'epp'
        $path = $file->store('epp', 's3'); // se almacena como 'epp/filename.ext'

        // Guardamos el path completo en la base de datos
        $Epp->image = $path;
    } else {
        return back()->withErrors(['image' => 'Error al subir la imagen']);
    }

    // Guardar los datos
    $Epp->save();

    return redirect()->route('epp.index')->with('success', 'La Epp fue creada con éxito');
}


    /**
     * Display the specified resource.
     */
    public function show(Epp $epp)
    {
        Gate::authorize('ver epp detalle');
         return view('epp.EppShow' , compact('epp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Epp $epp)
    {
        Gate::authorize('editar epp');
        return view('epp.EppEdit' , compact('epp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Epp $epp)
    {
        Gate::authorize('actualizar epp');

        // validamos peticiones

        $request->validate([
            'name' => 'required',
            'cantidad' => 'required',
            'unity'=>'required',
            'description' => 'max:255',
        ]);

        // actualizar datos de la peticion

        $epp->update($request->all());

        return redirect()->route('epp.index')
        ->with('success', 'Epp actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Epp $epp)
    {
        Gate::authorize('eliminar epp');

        // eliminar un epp

        $epp->delete();
        return redirect()->route('epp.index')->with('success', 'Epp eliminada correctamente');
    }
}
