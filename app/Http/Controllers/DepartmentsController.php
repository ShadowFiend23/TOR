<?php

namespace App\Http\Controllers;

use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    //

    public function departments(){
        $departments = Departments::join('employees','employees.employeeID','=','departments.departmentHead')
                                    ->get(['departments.*','employees.firstName','employees.lastName']);
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
                "email"             => "required",
                "file"              => "required",
            ]);

            $file = $request->file('file');

            if($file->move("uploads",$file->getClientOriginalName())){

                $data = $request->except('id');
                $data['file'] = "uploads/".$file->getClientOriginalName();
                $query = Departments::whereId($request->input('id'))->update($data);

            }else{
                return response()->json([
                    "success"   => false,
                    "msg"       => "Error saving department."
                ]);
            }


        }else{
            $request->validate([
                "departmentName"    => "required",
                "departmentHead"    => "required|exists:employees,employeeID",
                "email"             => "required",
                "file"              => "required",
            ]);

            $file = $request->file('file');

            if($file->move("uploads",$file->getClientOriginalName())){

                $data = $request->all();
                $data['file'] = "uploads/".$file->getClientOriginalName();
                $query = Departments::create($data);

            }else{
                return response()->json([
                    "success"   => false,
                    "msg"       => "Error saving department."
                ]);
            }
        }

        return response()->json([
            "success"   => true,
            "msg"       => "Successfully saving department."
        ]);
    }
}
