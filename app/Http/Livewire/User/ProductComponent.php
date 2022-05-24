<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\ProductsCategory;
use App\Models\Vending;

class ProductComponent extends Component
{
    public function render()
    {
        $category = ProductsCategory::all();
        $vending = Vending::all();
        return view('livewire.user.product-component', compact('category','vending'))->layout('layouts.base');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProductsCategory::all();
        $vending = Vending::all();
        return view('livewire.user.product-component', compact('category','vending'))->layout('layouts.base');
    }
}
