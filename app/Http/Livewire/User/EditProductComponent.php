<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Product;

class EditProductComponent extends Component
{
    public function render()
    {
        return view('livewire.user.edit-product-component')->layout('layouts.base');
    }
}
