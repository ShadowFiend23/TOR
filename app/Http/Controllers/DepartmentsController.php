<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //

    public function departments(){
        $departments = Departments::all();
        return view('admin/departments/index',compact('departments'));
    }

    public function addDepartmentPage(){
        return view('admin/departments/new');
    }

    public function editDepartmentPage(Request $request){
        $id = $request->input('id');

        $department = Departments::find($id);

        if($department){
            return view('admin/departments/new',compact('department'));
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
