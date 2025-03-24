<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Solicitud;

class NotificationsMenu extends Component
{
    public function render()
    {
       $notifications = Solicitud::select('id', 'epp_id', 'state')
         ->where('user_id', auth()->id())
          ->whereIn('state', ['Aprobado', 'Rechazado'])
          ->orderByDesc('updated_at')
          ->limit(3)
          ->get();

        return view('livewire.notifications-menu', compact('notifications'));
    }
}
