<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        return view('livewire.user.product-component')->layout('layouts.base');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livewire.user.product-component')->layout('layouts.base');
    }
}
