<?php

namespace App\Livewire;

use App\Models\Solicitud;
use Livewire\Component;
use Livewire\WithPagination;

class SearchSolicitud extends Component
{
    use WithPagination;

    public $estadoFiltro = null; // Estado seleccionado

    public function setEstado($estado)
    {
        $this->estadoFiltro = $estado;
    }

    public function render()
    {
        $solicitudes = Solicitud::when($this->estadoFiltro, function ($query) {
            $query->where('state', $this->estadoFiltro);
        })->paginate(10);

        return view('livewire.search-solicitud', compact('solicitudes'));
    }
}
