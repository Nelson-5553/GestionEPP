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
        $areas = Area::where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhereHas('sede', function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%');
            })
            ->orWhere('description', 'LIKE', '%' . $this->search . '%')
            ->with('sede')
            ->paginate(5);

        return view('livewire.search-areas', compact('areas'));
    }
}

