<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function show()
    {
        return view('login');
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

        // return back()->withErrors([
        //     'employeeID' => 'The provided credentials do not match our records.',
        // ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
