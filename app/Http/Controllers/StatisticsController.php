<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\EntregasExport;
use App\Models\Solicitud;
use App\Models\Entrega;


class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('ver dashboard');
        //solicitudes recientes
        $recentsolicitudes = Solicitud::select('user_id', 'sede_id', 'area_id', 'state', 'cantidad')->orderBy('updated_at', 'desc')->take(3)->get();
        // Obtener solicitudes agrupadas por mes
        $solicitudes = Solicitud::selectRaw('EXTRACT(MONTH FROM created_at) as mes, COUNT(*) as total')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        // Obtener entregas agrupadas por mes
        $entregas = Entrega::selectRaw('EXTRACT(MONTH FROM created_at) as mes, COUNT(*) as total')
            ->where('state', 'Entregado')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        // Obtener la lista de meses presentes en ambas consultas
        $meses = $solicitudes->pluck('mes')->merge($entregas->pluck('mes'))->unique()->sort()->values();

        // Convertir los números de mes a nombres (Ej: 1 -> 'Jan')
        $categories = $meses->map(function ($mes) {
            return date("M", mktime(0, 0, 0, $mes, 1));
        });

        // Formatear datos para el gráfico, asegurando que cada mes tenga valores
        $solicitudesData = $meses->map(fn($mes) => $solicitudes->firstWhere('mes', $mes)->total ?? 0);
        $entregasData = $meses->map(fn($mes) => $entregas->firstWhere('mes', $mes)->total ?? 0);

        // Pasamos los datos a la vista Blade
        return view('estadisticas.EstadisticasIndex', compact('categories', 'solicitudesData', 'entregasData', 'recentsolicitudes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function downloadPDF()
    {
        Gate::authorize('descargar reportes pdf');

        $data = ['title' => 'Ejemplo de PDF en Laravel 11'];

        // Cargar una vista Blade y pasarle datos
        $pdf = Pdf::loadView('pdf.reporte', $data)->setPaper('a4', 'landscape');

        // Descargar el PDF
        return $pdf->download('reporte.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */

    public function exportexcel()
    {
        Gate::authorize('descargar reportes pdf');
        
        return Excel::download(new EntregasExport, 'entregas.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

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
    public function show(string $id)
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
    public function destroy(string $id)
    {
        //
    }
}
