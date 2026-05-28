<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * 
     * 
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = Auth::user();
        if (!$user) {
            // niet ingelogt: naar login
            return redirect()->route('login');
        }

        $userRole = strtolower($user->rolename ?? '');

        if (!in_array($userRole, $roles, true)) {
            abort(403, 'Onvoldoende rechten.');
        }
        
        return $next($request);
        
        
        }
}