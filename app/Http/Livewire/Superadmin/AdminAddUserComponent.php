<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;

class AdminAddUserComponent extends Component
{
    public function render()
    {
        return view('livewire.superadmin.admin-add-user-component')->layout('layouts.base');
    }
}
