<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\ProductsCategory;

class ProductCategoryComponent extends Component
{
    public function render()
    {
        $category = ProductsCategory::count();
        return view('livewire.user.product-category-component', compact('category'))->layout('layouts.base');
    }
}
