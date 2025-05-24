<?php

namespace App\Http\Middleware;

use App\Enums\UserRole;
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
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the user's role matches any of the allowed roles
            if (in_array(Auth::user()->role->value, $roles)) {
                return $next($request);
            } else {
                return match (Auth::user()->role) {
                    UserRole::ADMIN => redirect()->route('admin.dashboard'),
                    UserRole::INSTRUCTOR => redirect()->route('instructor.dashboard'),
                    UserRole::STUDENT => redirect()->route('student.dashboard'),
                    default => redirect('/'),  // fallback
                };
            }
        } elseif (in_array('guest', $roles)) {
            // If the role is 'guest' and no user is logged in, allow the request to proceed
            return $next($request);
        }

        // If the user isn't authenticated and no 'guest' role is allowed, redirect
        return redirect('/');
    }
}
