<?php

namespace App\Http\Livewire;
use App\Models\Rates;

use Livewire\Component;

class RatesComponent extends Component
{
    public function deleteRate($rate_id)
    {
      $rate = Rates::find($rate_id);
      $rate->delete();
      session()->flash('message','Rate deleted successfully');
      
    }
    public function render()
    {
        $rates = Rates::all();
        return view('livewire.rates-component',['rates'=>$rates])->layout('layouts.base');
    }
}
