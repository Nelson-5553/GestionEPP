<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UpdateSignatureUser extends Component
{
    public $signature;

    public function mount()
    {
        $this->signature = Auth::user()->signature; // Obtener la firma del usuario autenticado
    }

    public function render()
    {
        return view('livewire.update-signature-user');
    }
}
