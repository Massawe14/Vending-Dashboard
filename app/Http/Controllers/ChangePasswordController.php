<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function create() {
        return view('livewire.user.change-password-component');
    }

    public function updatePassword() {
        // Validation
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        dd($request->all());
    }
}
