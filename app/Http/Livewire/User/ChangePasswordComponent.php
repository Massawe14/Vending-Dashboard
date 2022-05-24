<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ChangePasswordComponent extends Component
{
    public function render()
    {
        return view('livewire.user.change-password-component')->layout('layouts.base');
    }
}
