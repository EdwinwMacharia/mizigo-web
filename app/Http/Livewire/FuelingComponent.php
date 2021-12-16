<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FuelingComponent extends Component
{
    public function render()
    {
        return view('livewire.fueling-component')->layout('layouts.base');
    }
}
