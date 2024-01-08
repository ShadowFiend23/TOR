<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CoAdmin;
use Illuminate\Http\Request;
use App\Interfaces\EmployeesRepositoryInterface;

class CoAdminController extends Controller
{
    private EmployeesRepositoryInterface $employeesRepository;

    public function __construct(EmployeesRepositoryInterface $employeesRepository)
    {
        $this->employeesRepository = $employeesRepository;
    }

    public function coAdmin(){
        $employees = CoAdmin::all();

        return view('admin.co_admins.index', compact('employees'));
    }

    public function addCoAdminPage(){
        return view('admin.co_admins.new');
    }

    public function editCoAdminPage(Request $request){
        $id = $request->input('id');

        $employee = $this->employeesRepository->getEmployeeById($id);
        if($employee){
            return view('admin.co_admins.new',compact('employee'));
        }
    }

    public function deleteCoAdmin(Request $request){
        $result = CoAdmin::where('id',$request->input('id'))->delete();

        if(!$result){
            return response()->json([
                "success"   => false,
                "msg"       => "Error deleting co-admin"
            ]);
        }

        return response()->json([
            "success"   => true,
            "msg"       => "Successfully deleted co-admin"
        ]);
    }

    public function saveCoAdmin(Request $request){
        if(!empty($request->input('id'))){
            $request->validate([
                "adminID"       => "required",
                "lastName"      => "required",
                "firstName"     => "required",
                "middleName"    => "required",
                "email"         => "required",
                "password"      => "required",
            ]);
        }else{
            $request->validate([
                "adminID"       => "required|unique:co-admin,adminID",
                "lastName"      => "required",
                "firstName"     => "required",
                "middleName"    => "required",
                "email"         => "required|unique:co-admin,email",
                "password"      => "required",
            ]);
        }

        CoAdmin::create($request->except('password'));

        $params = [
            "userID"    => $request->input('adminID'),
            "password"  => $request->input('password'),
            "role"      => 1
        ];

        $query = User::create($params);

        if(!$query){
            return response()->json([
                "success"   => false,
                "msg"       => "Error saving new employee."
            ]);
        }

        return response()->json([
            "success"   => true,
            "msg"       => "Successfully add new employee."
        ]);
    }
}
