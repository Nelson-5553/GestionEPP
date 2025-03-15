<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entrega;
use Livewire\WithPagination;


class TablePdf extends Component
{
    use WithPagination;
    public function render()
    {


        $entregas = Entrega::where('state', 'Entregado')->get();
        return view('livewire.table-pdf', compact('entregas'));
    }
}
