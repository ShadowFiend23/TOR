<?php

namespace App\Http\Controllers;

use App\Interfaces\EmployeesRepositoryInterface;
use App\Models\Employees;
use App\Models\Departments;
use App\Repositories\EmployeesRepository;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    private EmployeesRepositoryInterface $employeesRepository;

    public function __construct(EmployeesRepositoryInterface $employeesRepository)
    {
        $this->employeesRepository = $employeesRepository;
    }

    public function index(){
        return view('app');
    }

    public function employees(){
        $employees = Employees::join('employee_roles','employees.roleCode','=','employee_roles.code')
                            ->get(['employees.*','employee_roles.name']);

        return view('components.employee.employees', compact('employees'));
    }

    public function addEmployeePage(){
        return view('components.employee.addEmployee');
    }

    public function editEmployeePage(Request $request){
        $id = $request->input('id');

        $employee = $this->employeesRepository->getEmployeeById($id);
        if($employee){
            return view('components.employee.addEmployee',compact('employee'));
        }
    }

    public function deleteEmployee(Request $request){
        $result = Employees::where('id',$request->input('id'))->delete();

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
