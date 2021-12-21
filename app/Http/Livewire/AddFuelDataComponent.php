<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\fueling;

class AddFuelDataComponent extends Component
{
    public $vehicle_id;
    public $fuel_station;
    public $amount;
    public $litres;
    public $user_id;
    
    public function updated($fields)
    {
        $this->validateOnly($fields,[

            'vehicle_id'=> 'required',
            'fuel_station'=> 'required',
            'amount'=> 'required',
            'litres'=> 'required',
        ]);

        $fuel = new fueling();
        $fuel->vehicle_id = $this->vehicle_id;
        $fuel->fuel_station = $this->fuel_station;
        $fuel->amount = $this->amount;
        $fuel->litres = $this->litres;
        $fuel->save();
        session()->flash('message','Fuel data created successfully...');

    }

    public function StoreFuel()
    {
        $this->validate([
            'vehicle_no'=> 'required',
            'fuel_station'=> 'required',
            'amount'=> 'required',
            'litres'=> 'required',
        ]);

    }
    public function render()
    {
        return view('livewire.add-fuel-data-component')->layout('layouts.base');
    }
}
