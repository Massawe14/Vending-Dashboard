<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Product;
use App\Models\Vending;

class UserDashboardComponent extends Component
{
    public function render() {
        $product = Product::latest()->paginate(5);
        $prod =  Product::count();
        $vending = Vending::count();
        return view('livewire.user.user-dashboard-component', compact('product','prod','vending'))->layout('layouts.base');
    }
}

