<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class StudentLoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('student.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'studentID' => ['required', 'studentID'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['studentID' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'studentID' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('studentLogin');
    }
}
