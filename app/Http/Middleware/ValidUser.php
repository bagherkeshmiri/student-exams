<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidUser
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('user')->check()) {
            return redirect()->route('user.dashboard');
        }
        return $next($request);
    }
}
