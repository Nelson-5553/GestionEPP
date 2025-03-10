<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class SearchUser extends Component
{
    use WithPagination;

    public $search = '';

    #[On('searchChangedUser')]
    public function updateSearch($value)
    {
        $this->search = $value;
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('card', 'LIKE', '%' . $this->search . '%')
        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
        ->paginate(10);
        return view('livewire.search-user', compact('users'));
    }
}
