<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RatesComponent extends Component
{
    public function render()
    {
        return view('livewire.rates-component')->layout('layouts.base');
    }
}
