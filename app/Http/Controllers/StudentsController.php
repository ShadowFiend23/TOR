<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use App\Models\Students;
use App\Models\Departments;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function students(){
        $departments = Departments::all();

        return view('admin/students/index',compact('departments'));
    }

    public function addStudentsPage(){
        return view('components.employee.addEmployee');
    }

    public function editStudentsPage(Request $request){
        $id = $request->input('id');

        // $employee = $this->employeesRepository->getEmployeeById($id);
        // if($employee){
        //     return view('components.employee.addEmployee',compact('employee'));
        // }
    }

    public function deleteStudents(Request $request){
        $result = Students::where('id',$request->input('id'))->delete();

        if(!$result){
            return response()->json([
                "success"   => false,
                "msg"       => "Error deleting student"
            ]);
        }

        return response()->json([
            "success"   => true,
            "msg"       => "Successfully deleted student"
        ]);
    }

    public function saveStudent(Request $request){
        $request->validate([
            "studentID"    => "required|unique:students,studentID",
            "lastName"      => "required",
            "firstName"     => "required",
            "middleName"    => "required",
            "email"         => "required",
            "password"      => "required",
        ]);

        $query = Students::create($request->all());

        if(!$query){

            return response()->json([
                "success"   => false,
                "msg"       => "Error saving new employee."
            ]);
        }

        $params = [
            "userID"    => $request->input('studentID'),
            "password"  => $request->input('password'),
            "role"      => 2
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
