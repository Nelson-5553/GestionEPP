<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Models\Entrega;
use App\Models\Epp;
use Illuminate\Http\Request;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('ver entrega');
        return view('entrega.EntregaIndex');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrega $entrega)
    {
        Gate::authorize('ver entrega detalle');
        return view('entrega.EntregaShow', compact('entrega'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrega $entrega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrega $entrega)
{
    Gate::authorize('actualizar entrega');
    // dd($request);
    $request->validate([
        'state' => 'in:Pendiente,Entregado,Cancelado',
        'start_time_labor' => 'required',
        'end_time_labor' => 'required',
        'observations' => 'max:255'
    ]);

    // Actualizar la entrega en la base de datos

    // dd($entrega);
    $entrega->update([
        'state' => 'Entregado',
        'start_time_labor' => $request->start_time_labor,
        'end_time_labor' => $request->end_time_labor,
        'observations' => $request->observations
    ]);

    return redirect()->route('entrega.index')->with('success', 'EPP Entregado');
}

//cambiar estado a cancelado
public function updatecancel(Request $request, Entrega $entrega)
{
    Gate::authorize('actualizar entrega');

    // Verificar si la entrega estaba en estado "Pendiente" antes de cancelar
    $state= $entrega->state === 'Pendiente';

    // Actualizar el estado de la entrega a "Cancelado"
    $entrega->update([
        'state' => 'Cancelado',
    ]);

    // Si la entrega estaba en estado "Pendiente", revertimos el stock del EPP
    if ($state) {
        // Obtener el EPP relacionado con la solicitud de la entrega
        $epp = Epp::findOrFail($entrega->solicitud->epp_id);

        // Revertir la cantidad del EPP
        $epp->update([
            'cantidad' => $epp->cantidad + $entrega->solicitud->cantidad
        ]);
    }

    return redirect()->route('entrega.index')->with('success', 'Entrega cancelada correctamente.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrega $entrega)
    {
        //
    }
}
