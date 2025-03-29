<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Solicitud;

class SolicitudRecent extends Component
{
    public function render()
    {
        $recentsolicitudes = Solicitud::select('user_id', 'sede_id', 'area_id', 'state', 'cantidad')->orderBy('updated_at', 'desc')->take(3)->get();
        return view('livewire.solicitud-recent', compact('recentsolicitudes'));
    }
}
