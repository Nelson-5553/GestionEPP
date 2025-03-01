<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Sede;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::with('sede')->get();
        $sedes = Sede::all();
        return view('area.AreaIndex', compact('areas', 'sedes'));
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
    public function store(Request $request)
    {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('area.index')->with('success', 'La area fue eliminada con éxito');
    }
}
