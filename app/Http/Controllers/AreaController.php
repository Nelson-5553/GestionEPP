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
        // $areas = Area::with('sede')->get();
        $sedes = Sede::all();
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
        // Gate::authorize('crear area');
        $Area = new Area();

        $Area->name = $request->name;
        $Area->sede_id = $request->sede_id;
        $Area->description = $request->description;

        $Area->save();

        return redirect()->route('area.index')->with('success', 'La area fue creada con éxito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        Gate::authorize('ver area detalle');
        $area->load('Sede');
        return view('area.AreaShow', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        $sedes = Sede::select('id', 'name')->get();
        return view('area.AreaEdit', compact('area', 'sedes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'name' => 'required',
            'sede_id' => 'required',
            'description' => 'max:255',
        ]);

        $area->update($request->all());

        return redirect()->route('area.index')
        ->with('success', 'Sede actualizada correctamente.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        Gate::authorize('eliminar area');
        $area->delete();
        return redirect()->route('area.index')->with('success', 'La area fue eliminada con éxito');
    }
}
