<?php

namespace App\Livewire;

use App\Models\Area;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class SearchAreas extends Component
{
    use WithPagination;

    public $search = '';

    #[On('searchChanged')]
    public function updateSearch($value)
    {
        $this->search = $value;
        $this->resetPage();
    }

    public function render()
{
    $search = $this->search;
    $query = Area::query();

    if (!empty($search)) {
        $query->where(function($q) use ($search) {
            $q->where('name', 'LIKE', "%{$search}%")
              ->orWhere('description', 'LIKE', "%{$search}%");
        });

        // Solo buscar en la relación si es necesario
        if (strlen($search) > 2) {
            $query->orWhereHas('sede', function ($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%");
            });
        }
    }

    $areas = $query->with('sede')->paginate(5);

    return view('livewire.search-areas', compact('areas'));
}
}

