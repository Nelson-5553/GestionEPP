<?php

namespace App\Livewire;

use App\Models\Epp;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class SearchEpp extends Component
{
    use WithPagination;

    public $search = '';

    #[On('searchChangedEpp')]
    public function updateSearch($value)
    {
        $this->search = $value;
        $this->resetPage();
    }
    public function render()
    {
        $epps =  Epp::where('name', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.search-epp', compact('epps'));
    }
}
