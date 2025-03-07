<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entrega;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class SearchEntrega extends Component
{
    use WithPagination;

    public $search = '';

    #[On('searchChangedEntrega')]
    public function updateSearch($value)
    {
        $this->search = $value;
        $this->resetPage();
    }

    public function render()
    {
        $user = Auth::user();

        $entregas = Entrega::query()
            ->when(!$user->hasRole('admin'), function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })
            ->where('state', 'LIKE', '%' . $this->search . '%')
            ->orWhereHas('solicitud.user', function ($query) {
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
            })
            ->paginate(5);

        return view('livewire.search-entrega', compact('entregas'));
    }

}
