<?php

namespace App\Livewire;

use App\Models\Solicitud;
use Livewire\Component;

class SearchSolicitud extends Component
{
    public function render()
    {
        $solicitudes = Solicitud::all();
        return view('livewire.search-solicitud', compact('solicitudes'));
    }
}
