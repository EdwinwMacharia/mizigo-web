<?php

namespace App\Http\Livewire\Subadmin;

use Livewire\Component;

class SubadminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.subadmin.subadmin-dashboard-component')->layout('layouts.base');
    }
}
