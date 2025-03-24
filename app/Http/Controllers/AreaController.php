<?php

namespace App\Http\Controllers;

use App\Http\Requests\AreaRequest;
use App\Models\Area;
use App\Models\Sede;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        Gate::authorize('ver area');

        // Extraer sedes para el formulario de registro de areas

        $sedes = Sede::select('id', 'name')->get();
        return view('area.AreaIndex', compact('sedes'));
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
    public function store(AreaRequest $request)
    {

        $Area = new Area();

        // Tomar registros de los inputs

        $Area->name = $request->name;
        $Area->sede_id = $request->sede_id;
        $Area->description = $request->description;

        // Guardar informacion en base de datos

        $Area->save();

        // Volver a pestaña principal

        return redirect()->route('area.index')->with('success', 'La area fue creada con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {

        Gate::authorize('ver area detalle');

        // Cargar relaciones
        $area->load('Sede');

        //ir a vista para ver detalles
        return view('area.AreaShow', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        Gate::authorize('editar area');

     // Cargar relaciones para la posterior edicion de registros

        $sedes = Sede::select('id', 'name')->get();
        return view('area.AreaEdit', compact('area', 'sedes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        Gate::authorize('actualizar area');

    // validadciones de las peticiones de la vista
        $request->validate([
            'name' => 'required',
            'sede_id' => 'required',
            'description' => 'max:255',
        ]);

        // actualizar todos los elementos

        $area->update($request->all());

        //Area actualizada correctamente

        return redirect()->route('area.index')
        ->with('success', 'Area actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        Gate::authorize('eliminar area');

        // eliminar elemento seleccionado por id

        $area->delete();

        //Area eliminada correctamente
        
        return redirect()->route('area.index')->with('success', 'La area fue eliminada con éxito');
    }
}
