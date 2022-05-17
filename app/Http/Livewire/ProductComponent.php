<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        return view('livewire.product-component')->layout('layouts.base');
    }
}
