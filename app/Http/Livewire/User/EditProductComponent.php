<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductsCategory;
use App\Models\Vending;

class EditProductComponent extends Component
{
    public function render()
    {
        $category = ProductsCategory::all();
        $vending = Vending::all();
        return view('livewire.user.edit-product-component', compact('category','vending'))->layout('layouts.base');
    }
}
