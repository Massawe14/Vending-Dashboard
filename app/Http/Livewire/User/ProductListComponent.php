<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductsCategory;

class ProductListComponent extends Component
{
    public function render()
    {
        $product = Product::latest()->paginate(5);
        $category = ProductsCategory::all();
        return view('livewire.user.product-list-component', compact('product','category'))->layout('layouts.base');
    }
}
