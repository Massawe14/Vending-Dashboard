<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Vending;

class AdsComponent extends Component
{
    public function render()
    {
        $vending = Vending::all();
        return view('livewire.user.ads-component', compact('vending'))->layout('layouts.base');
    }
}
