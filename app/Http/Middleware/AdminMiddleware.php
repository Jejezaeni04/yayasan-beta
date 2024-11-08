<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and if their role is 'Admin'
        if (Auth::check() && Auth::user()->role === 'Admin') {
            return $next($request);
        }

        // If the user is not an admin, deny access with a 403 error
        abort(403, 'You do not have permission');
    }
}
