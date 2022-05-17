<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VendingComponent extends Component
{
    public function render()
    {
        return view('livewire.vending-component')->layout('layouts.base');
    }
}
