<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class ChangePasswordController extends Controller
{
    public function create() {
        return view('livewire.user.change-password-component');
    }

    public function updatePassword(Request $request) {
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        // Match old password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', "Old Password does not match");
        }

        // Update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('status', "Password changed successfully");
    }
}
