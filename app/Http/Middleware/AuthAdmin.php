<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('role') === '1') {
            return $next($request);
        }
        else if (session('role') === '0') {
            return $next($request);
        }
        else {
            session()->flush();
            return redirect()->with('message', 'Access Denied as you are not Admin')->route('login'); 
        }
        return $next($request);
    }
}
