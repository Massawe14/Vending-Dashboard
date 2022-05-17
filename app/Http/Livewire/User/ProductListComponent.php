<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ProductListComponent extends Component
{
    public function render()
    {
        return view('livewire.user.product-list-component')->layout('layouts.base');
    }
}
