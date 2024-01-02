<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

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

            $user = User::where('userID',$request->userID)->get()[0];
            $role = $user->role;
            session('userRole',$role);

            if($role === "admin"){
                return route('admin');
            }else if($role === "employee"){
                return route('department');
            }
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

        return redirect()->route('login');
    }
}
