<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class VendingListComponent extends Component
{
    public function render()
    {
        return view('livewire.user.vending-list-component')->layout('layouts.base');
    }
}
