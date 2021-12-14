<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ReportIncidentComponent extends Component
{
    public function render()
    {
        return view('livewire.report-incident-component')->layout("layouts.base");
    }
}
