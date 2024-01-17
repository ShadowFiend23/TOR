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
        return view('admin.employees.login');
    }

    public function studentShow()
    {
        return view('student.login');
    }

    public function login(Request $request)
    {
        $request->validate([
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

                $response = response()->json([
                    "success" => true,
                    "route" => route('admin')
                ]);

            }else if($role === "employee"){
                Session::put('firstName', $user->firstName);

                if(($user->roleCode == "department-head" || $user->roleCode == "in-charge") && empty($user->designation)){
                    Auth::logout();

                    $request->session()->invalidate();
                    $request->session()->regenerateToken();

                    $response = response()->json([
                        "success" => false,
                        "msg" => "User has no assigned department yet"
                    ]);
                }else{
                    $response = response()->json([
                        "success" => true,
                        "route" => route($user->route)
                    ]);
                }

            }
        }else{

            $response = response()->json([
                "success" => false,
                "msg" => "The provided credentials do not match our records."
            ]);
        }

        return $response;
    }

    public function studentLogin(Request $request){
        $request->validate([
            'userID' => 'required|exists:users,userID',
            'password' => 'required'
        ]);

        if (Auth::attempt(['userID' => $request->userID, 'password' => $request->password])) {
            $response = response()->json([
                "success" => true,
                "route" => route('studentDashboard')
            ]);
        }else{

            $response = response()->json([
                "success" => false,
                "msg" => "The provided credentials do not match our records."
            ]);
        }

        return $response;
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
