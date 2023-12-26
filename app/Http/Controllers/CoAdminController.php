<?php

namespace App\Http\Controllers;

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

        return view('components.employee.employees', compact('employees'));
    }

    public function addCoAdminPage(){
        return view('components.employee.addEmployee');
    }

    public function editCoAdminPage(Request $request){
        $id = $request->input('id');

        $employee = $this->employeesRepository->getEmployeeById($id);
        if($employee){
            return view('components.employee.addEmployee',compact('employee'));
        }
    }

    public function deleteCoAdmin(Request $request){
        $result = CoAdmin::where('id',$request->input('id'))->delete();

        if(!$result){
            return response()->json([
                "success"   => false,
                "msg"       => "Error deleting employee"
            ]);
        }

        return response()->json([
            "success"   => true,
            "msg"       => "Successfully deleted employee"
        ]);
    }

    public function saveEmployee(Request $request){
        if(!empty($request->input('id'))){
            $request->validate([
                "employeeID"    => "required",
                "roleCode"      => "required|exists:employee_roles,code",
                "lastName"      => "required",
                "firstName"     => "required",
                "middleName"    => "required",
                "email"         => "required",
                "password"      => "required",
            ]);
        }else{
            $request->validate([
                "employeeID"    => "required|unique:employees,employeeID",
                "roleCode"      => "required|exists:employee_roles,code",
                "lastName"      => "required",
                "firstName"     => "required",
                "middleName"    => "required",
                "email"         => "required|unique:employees,email",
                "password"      => "required",
            ]);
        }

        $query = $this->employeesRepository->createEmployee($request->except('password'));

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
