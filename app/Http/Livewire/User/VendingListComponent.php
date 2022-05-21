<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Vending;

class VendingListComponent extends Component
{
    public function render()
    {
        $vending = Vending::latest()->paginate(5);
        return view('livewire.user.vending-list-component', compact('vending'))->layout('layouts.base');
    }
}
