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
            // Filtra por usuario si no es admin, usando la relación solicitud
            ->when(!$user->hasAnyRole('admin' , 'supervisor'), function ($query) use ($user) {
                $query->whereHas('solicitud', function ($query) use ($user) {
                    $query->where('user_id', $user->id);
                });
            })

            // Agrupar condiciones de búsqueda
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
            })
            ->orderBy('updated_at', 'desc')
            ->paginate(5);

        return view('livewire.search-entrega', compact('entregas'));

    }

}
