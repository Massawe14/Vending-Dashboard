<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Product;

class UserDashboardComponent extends Component
{
    public function render() {
        $product = Product::latest()->paginate(5);
        return view('livewire.user.user-dashboard-component', compact('product'))->layout('layouts.base');
    }
}

