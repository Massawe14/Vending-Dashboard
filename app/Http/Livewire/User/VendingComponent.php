<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class VendingComponent extends Component
{
    public function render()
    {
        return view('livewire.user.vending-component')->layout('layouts.base');
    }
}
