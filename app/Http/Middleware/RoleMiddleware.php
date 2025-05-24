<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (Auth::check()) {
            // If the user's role matches the required role
            if (Auth::user()->role->value == $role) {
                return $next($request);  // You need to return this response
            } else {
                // If the user's role doesn't match, redirect to the homepage or any other page
                return redirect('/');
            }
        } elseif ($role == 'guest') {
            // If the role is 'guest' and no user is logged in, allow the request to proceed
            return $next($request);
        }

        // If the user isn't authenticated and the role is not 'guest', redirect
        return redirect('/');
    }
}
