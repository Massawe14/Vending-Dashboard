<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function checkUserType() {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        if (Auth::user()->userType === 'ADM') {
            return redirect()->route('admin.dashboard');
        }
        if (Auth::user()->userType === 'USR') {
            return redirect()->route('user.dashboard');
        }
    }
}
