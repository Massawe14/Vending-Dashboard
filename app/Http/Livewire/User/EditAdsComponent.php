<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class EditAdsComponent extends Component
{
    public function render()
    {
        $vending = Vending::all();
        return view('livewire.user.edit-ads-component', compact('vending'))->layout('layouts.base');
    }
}
