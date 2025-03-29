<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entrega;
use Livewire\Attributes\On;


class TablePdf extends Component
{
    public $search = '';

    #[On('searchChangedTablepdf')]
    public function updateSearch($value)
    {
        $this->search = $value;
        // $this->resetPage();
    }

    public function render()
    {

        
        $entregas = Entrega::where('state', 'Entregado')
        ->where(function ($query) {
            $query->whereHas('solicitud.user', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('card', 'LIKE', '%' . $this->search . '%');
            })
            ->orWhereHas('solicitud.epp', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->orWhereHas('solicitud.sede', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->orWhereHas('solicitud.area', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->orWhereHas('solicitud', function ($query) {
                $query->where('cantidad', 'LIKE', '%' . $this->search . '%');
            });
        })->get();
        return view('livewire.table-pdf', compact('entregas'));
    }
}
