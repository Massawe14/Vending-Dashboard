<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Vending;
use App\Models\Product;

class VendingProductComponent extends Component
{
    public function render($vending_id)
    {
        $product = Product::where('vending_id','=', $vending_id)->paginate(5);
        return view('livewire.user.vending-product-component', compact('product'))->layout('layouts.base');
    }
}
