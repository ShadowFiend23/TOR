<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Employees;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Repositories\EmployeesRepository;
use App\Interfaces\EmployeesRepositoryInterface;

class EmployeesController extends Controller
{
    private EmployeesRepositoryInterface $employeesRepository;

    public function __construct(EmployeesRepositoryInterface $employeesRepository)
    {
        $this->employeesRepository = $employeesRepository;
    }

    public function index(){
        $data = [
            'departments'   => Employees::where('roleCode','department-head'),
            'registrar'     => Employees::where('roleCode','registrar'),
            'evaluator'     => Employees::where('roleCode','evaluator'),
            'saso'          => Employees::where('roleCode','saso'),
            'students'      => Students::all()
        ];

        return view('admin/index',compact('data'));
    }

    public function employees(){
        $employees = Employees::join('employee_roles','employees.roleCode','=','employee_roles.code')
                            ->get(['employees.*','employee_roles.name']);

        return view('admin/employees/index', compact('employees'));
    }

    public function addEmployeePage(){
        $info = [
            'title'     => "Add Employee",
            'button'    => "Add Employee"
        ];

        return view('admin/employees/new',compact('info'));
    }

    public function editEmployeePage(Request $request){
        $id = $request->input('id');

        $info = [
            'title'     => "Edit Employee",
            'button'    => "Update Employee",
            'data'      => $this->employeesRepository->getEmployeeById($id)
        ];

        if(!empty($info['data'])){
            return view('admin/employees/new',compact('info'));
        }
    }

    public function archivedPage(){
        $employees = Employees::join('employee_roles','employees.roleCode','=','employee_roles.code')
                            ->onlyTrashed()
                            ->get(['employees.*','employee_roles.name']);

        return view('admin/employees/archived', compact('employees'));
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

        $query = $this->employeesRepository->createEmployee($request);

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
