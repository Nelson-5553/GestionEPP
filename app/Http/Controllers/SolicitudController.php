<?php

namespace App\Http\Controllers;

use App\Models\Epp;
use App\Models\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $solicitudes = Solicitud::all();
        return view('solicitud.SolicitudIndex' );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $epps = Epp::whereNotNull('name')->whereNotNull('id')->get();
        return view('solicitud.SolicitudCreate', compact('epps'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $solicitud = new Solicitud();

        $solicitud->user_id = $request->user_id;
        $solicitud->epp_id = $request->epp_id;
        $solicitud->sede_id = $request->sede_id;
        $solicitud->area_id = $request->area_id;
        $solicitud->cantidad = $request->cantidad;

        // dd($solicitud);
        $solicitud->save();

        return redirect()->route('solicitud.index')->with('success', 'solicitud enviada');

    }

    /**
     * Display the specified resource.
     */
    public function show(Solicitud $solicitud)
    {
        Gate::authorize('ver solicitud detalle');
        return view('solicitud.SolicitudShow', compact('solicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Solicitud $solicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        // Validar el estado recibido
        Gate::authorize('editar solicitud');

        $request->validate([
            'state' => 'required|in:Pendiente,Aprobado,Rechazado',
        ]);

        // Actualizar el estado en la base de datos
        $solicitud->update([
            'state' => $request->state,
            'aprobado_por_id' => Auth::id(),
        ]);

        if ($request->state === 'Aprobado'){

            dd($solicitud);
        }

        // Crear un registro en entrega

        // Redirigir con un mensaje de éxito
        return redirect()->route('solicitud.index')->with('success', 'Estado actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Solicitud $solicitud)
    {
        //
    }
}
