<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class OwnerAuthenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (!Auth::guard('owner')->check()) {
            return redirect()->route('loginAcademy');
        }

        return $next($request);
    }
}
