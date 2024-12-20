<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class KandidatMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the 'Kandidat' role
        if (Auth::check() && Auth::user()->role === 'Kandidat') {
            return $next($request);
        }

        // If the user does not have the 'Kandidat' role, deny access with a 403 error
        abort(403, 'You do not have permission');
    }

}
