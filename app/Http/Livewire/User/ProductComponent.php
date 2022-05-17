<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        return view('livewire.user.product-component')->layout('layouts.base');
    }
}
