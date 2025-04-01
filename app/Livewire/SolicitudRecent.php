<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Solicitud;

class SolicitudRecent extends Component
{
    public $altura;
    public $scroll;

    public function mount($altura = 'h-[21.5rem]', $scroll = 'max-h-56')
    {
        $this->altura = $altura;
        $this->scroll = $scroll;
    }

    public function render()
    {
        $user = Auth::user();

        $recentsolicitudes = Solicitud::select('user_id', 'sede_id', 'area_id', 'state', 'cantidad')
        ->when(!$user->hasAnyRole('admin', 'supervisor'), function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
        ->orderBy('updated_at', 'desc')
        ->take(6)
        ->get();

        return view('livewire.solicitud-recent', compact('recentsolicitudes'));

    }
}
