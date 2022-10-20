<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Servicio;

class Navigation extends Component
{
    public function render()
    {
        $servicios = Servicio::all();

        return view('livewire.navigation', compact('servicios'));
    }
}
