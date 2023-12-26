<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;

class EmployeeLoginController extends Controller
{
    /**
     * Display login page.
     *
     * @return Renderable
     */
    public function show()
    {
        return view('employee.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'userID' => 'required|exists:users,userID',
            'password' => 'required'
        ]);

        if (Auth::attempt(['userID' => $request->userID, 'password' => $request->password])) {
            $request->session()->regenerate();

            return route('admin');
        }

        return back()->withErrors([
            'employeeID' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('employeeLogin');
    }
}
