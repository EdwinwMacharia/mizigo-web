<?php

namespace App\Http\Livewire\Superadmin;

use Livewire\Component;

class AdminUsersComponent extends Component
{
    public function render()
    {
        return view('livewire.superadmin.admin-users-component')->layout('layouts.base');
    }
}
