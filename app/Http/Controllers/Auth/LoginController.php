<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function showLoginForm(): View
    {
        return view('auth::pages.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->boolean('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $message = 'Welcome back, ' . $user->name . '!';
            if (Auth::user()->role === User::ROLE_ADMIN) {
                return redirect()->intended(route('admin.dashboard'))->with('success', $message);
            } else if (Auth::user()->role === User::ROLE_CANDIDATE) {
                return redirect()->intended(route('candidate.dashboard'))->with('success', $message);
            } else {
                // Return to the dashboard or any other appropriate route
                dd('Role not found');
                // return redirect()->intended(route('dashboard'))->with('success', $message);
            }
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}
