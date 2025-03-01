<?php

namespace App\Livewire;

use App\Models\Epp;
use Livewire\Component;

class SearchEpp extends Component
{
    public function render()
    {
        $epps =  Epp::all();
        return view('livewire.search-epp', compact('epps'));
    }
}
