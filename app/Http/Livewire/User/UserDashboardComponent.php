<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Product;
use App\Models\Vending;
use App\Models\ProductsCategory;

class UserDashboardComponent extends Component
{
    public function render() {
        $product = Product::latest()->paginate(5);
        $prod =  Product::count();
        $vending = Vending::count();
        $category = ProductsCategory::count();
        return view('livewire.user.user-dashboard-component', compact('product','prod','vending','category'))->layout('layouts.base');
    }
}

