<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Product;

class ProductListComponent extends Component
{
    public function render()
    {
        $product = Product::latest()->paginate(5);
        return view('livewire.user.product-list-component', compact('product'))->layout('layouts.base');
    }
}
