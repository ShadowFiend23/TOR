<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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

            $user = User::leftJoin('employees','employees.employeeID','=', 'users.userID')
                        ->leftJoin('employee_roles','employees.roleCode','=','employee_roles.code')
                        ->where('userID',$request->userID)->get()[0];

            $role = $user->role;
            Session::put('userRole', $role);

            if($role === "admin"){
                return route('admin');
            }else if($role === "employee"){
                Session::put('firstName', $user->firstName);

                return route($user->route);
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
