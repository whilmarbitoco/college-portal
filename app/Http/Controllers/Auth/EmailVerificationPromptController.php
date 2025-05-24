<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        if ($request->user()->hasVerifiedEmail()) {
            return match ($request->user()->role) {
                UserRole::ADMIN => redirect()->route('admin.dashboard'),
                UserRole::INSTRUCTOR => redirect()->route('instructor.dashboard'),
                UserRole::STUDENT => redirect()->route('student.dashboard'),
                default => redirect('/'),
            };
        }

        return view('auth.verify-email');
    }
}
