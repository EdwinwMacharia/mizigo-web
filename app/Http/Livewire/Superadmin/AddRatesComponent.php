<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;
use App\Models\Rates;

class AddRatesComponent extends Component
{
    public $route;
    public $rate;

    public function updated($fields)
    {
        $this->validateOnly($fields,[

            'route'=> 'required',
            'rate'=> 'required',
        ]);
    }
    public function storeRates()
    {
        $this->validate([
            'route'=> 'required',
            'rate'=> 'required',
        ]);

        $rate = new Rates();
        $rate->route = $this->route;
        $rate->rate = $this->rate;;
        $rate->save();
        session()->flash('message','Rates created successfully...');
    }
    public function render()
    {
        return view('livewire.superadmin.add-rates-component')->layout('layouts.base');
    }
}
