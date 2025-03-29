<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Solicitud;
use Illuminate\Support\Facades\DB;

class EppCount extends Component
{
    public function render()
    {
        $eppcount = Solicitud::select('epp_id', DB::raw('COUNT(*) as total' ), DB::raw('SUM(cantidad::integer) as total_cantidad'))
        ->groupBy('epp_id')
        ->orderByDesc('total')
        ->take(3)
        ->get();

        return view('livewire.epp-count', compact('eppcount'));
    }
}
