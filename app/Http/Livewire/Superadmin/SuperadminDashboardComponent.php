<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;

class SuperadminDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.superadmin.superadmin-dashboard-component')-layout('layouts.base');
    }
}
