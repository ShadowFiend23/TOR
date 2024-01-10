<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Employees;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //

    public function departments(){
        $departments = Departments::join('employees','departments.departmentHead','=','employees.employeeID')
                                ->get(
                                    [
                                        "departments.*",
                                        "employees.lastName",
                                        "employees.firstName",
                                        "employees.middleName",
                                    ]
                                );
        return view('admin/departments/index',compact('departments'));
    }

    public function courses(Request $request){
        $courses = Courses::where('departmentID',$request->input('id'))->get();

        return view('admin.courses.index',compact('courses'));
    }

    public function getDepartmentHeadInfo(Request $request){
        $info = Employees::where('employeeID',$request->input('employeeID'))->first();

        if($info){
            $response = response()->json([
                "success" => true,
                "info" => $info
            ]);
        }else{
            $response = response()->json([
                "success" => false,
            ]);
        }

        return $response;
    }

    public function addDepartmentPage(){
        $heads = Employees::where('roleCode','department-head')
                            ->whereRaw('(designation = "" OR designation IS NULL)')
                            ->get();

        return view('admin/departments/new',compact('heads'));
    }

    public function editDepartmentPage(Request $request){
        $id = $request->input('id');

        $department = Departments::find($id);
        $heads = Employees::where('roleCode','department-head')
                            ->whereRaw('(designation = "" OR designation IS NULL)')
                            ->get();

        if($department){
            return view('admin/departments/new',compact('department','heads'));
        }
    }

    public function deleteDepartments(Request $request){
        $result = Departments::where('id',$request->input('id'))->delete();

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

    public function saveDepartment(Request $request){
        if(!empty($request->input('id'))){
            $request->validate([
                "departmentName"    => "required",
                "departmentHead"    => "required",
                "departmentColor"   => "required",
            ]);

            $query = Departments::whereId($request->input('id'))->update($request->except(['id','departmentEmail']));

            if($query){
                $response = [
                    "success" => true
                ];
            }else{
                $response = [
                    "success" => false
                ];
            }

        }else{
            $request->validate([
                "departmentName"    => "required",
                "departmentHead"    => "required|exists:employees,employeeID",
                "departmentColor"   => "required"
            ]);
            $query = Departments::create($request->except(['id','departmentEmail']));
            if($query){
                Employees::where('employeeID',$request->departmentHead)
                            ->update([ "designation" => $query->id]);

                $response = [
                    "success" => true
                ];
            }else{
                $response = [
                    "success" => false
                ];
            }
        }


        return response()->json($response);
    }
}
