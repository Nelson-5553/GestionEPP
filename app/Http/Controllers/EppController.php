<?php

namespace App\Http\Controllers;

use App\Http\Requests\EppRequest;
use App\Models\Epp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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

        // si image es un archivo
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();

            // Mover a la carpeta correcta
            $file->move(storage_path('app/public/epp'), $filename);

            $Epp->image = $filename;
        } else {
            // si hay un error devolvera esto
            return back()->withErrors(['image' => 'Error al subir la imagen']);
        }

        // guadar todos los datos extraidos de los request
        $Epp->save();

        //guardado correctamente
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
