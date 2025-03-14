<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Area;
use App\Models\Sede;

class FiltrarAreas extends Component
{
    public $sede_id = '';
    public $areas = [];

    // Este método se ejecutará automáticamente cuando cambie sede_id
    public function updatedSedeId()
    {
        if ($this->sede_id) {
            $this->areas = Area::where('sede_id', $this->sede_id)->get();
        } else {
            $this->areas = [];
        }
    }

    public function render()
    {
        return view('livewire.filtrar-areas', [
            'sedes' => Sede::select('id', 'name')->get(),
        ]);
    }
}
