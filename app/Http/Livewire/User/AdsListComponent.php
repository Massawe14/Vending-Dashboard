<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Ads;

class AdsListComponent extends Component
{
    public function render()
    {
        $ads = Ads::latest()->paginate(5);
        return view('livewire.user.ads-list-component', compact('ads'))->layout('layouts.base');
    }
}
