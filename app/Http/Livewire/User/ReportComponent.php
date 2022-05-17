<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ReportComponent extends Component
{
    public function render()
    {
        return view('livewire.user.report-component')->layout('layouts.base');
    }
}
