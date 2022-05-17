<?php

namespace App\Http\Livewire;

use Livewire\Component;

class VendingListComponent extends Component
{
    public function render()
    {
        return view('livewire.vending-list-component')->layout('layouts.base');
    }
}
