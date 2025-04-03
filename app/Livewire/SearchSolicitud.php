<?php

namespace App\Livewire;

use App\Models\Solicitud;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;


class SearchSolicitud extends Component
{
    use WithPagination;

    public $search = '';
    public $estadoFiltro = null; // Estado seleccionado

    #[On('searchChangedSolicitud')]
    public function updateSearch($value)
    {
        $this->search = $value;
        $this->resetPage();
    }

    public function setEstado($estado)
    {
        $this->estadoFiltro = $estado;
        $this->resetPage();
    }

    public function render()
    {
        $user = Auth::user();

        // Base query for counts and filtered results
        $baseQuery = Solicitud::when(!$user->hasAnyRole('admin', 'supervisor'), function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });

        // Get all counts
        $totalSolicitudes = (clone $baseQuery)->count();
        $aprobadas = (clone $baseQuery)->where('state', 'Aprobado')->count();
        $rechazadas = (clone $baseQuery)->where('state', 'Rechazado')->count();
        $pendientes = (clone $baseQuery)->where('state', 'Pendiente')->count();

        // Get filtered solicitudes
        $solicitudes = $baseQuery
            ->when($this->estadoFiltro, function ($query) {
                $query->where('state', $this->estadoFiltro);
            })
            ->where(function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('name', 'LIKE', '%' . $this->search . '%')
                          ->orWhere('card', 'LIKE', '%' . $this->search . '%');
                })
                ->orWhereHas('epp', function ($query) {
                    $query->where('name', 'LIKE', '%' . $this->search . '%');
                })
                ->orWhereHas('sede', function ($query) {
                    $query->where('name', 'LIKE', '%' . $this->search . '%');
                })
                ->orWhereHas('area', function ($query) {
                    $query->where('name', 'LIKE', '%' . $this->search . '%');
                });
            })
            ->orderBy('updated_at', 'desc')
            ->paginate(5);

            return view('livewire.search-solicitud', compact(
                'solicitudes', 'totalSolicitudes', 'aprobadas', 'rechazadas', 'pendientes'
            ));
    }
}
