<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class SearchUser extends Component
{
    use WithPagination;
    public function render()
    {
        $users = User::paginate(10);
        return view('livewire.search-user', compact('users'));
    }
}
