<?php

namespace App\Livewire;

use App\Models\Solicitud;
use Illuminate\Support\Facades\Auth;
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
        $user = Auth::user();

        $solicitudes = Solicitud::when(!$user->hasRole('admin'), function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->when($this->estadoFiltro, function ($query) {
            $query->where('state', $this->estadoFiltro);
        })->paginate(10);

        return view('livewire.search-solicitud', compact('solicitudes'));
    }
}

