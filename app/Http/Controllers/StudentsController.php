<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Courses;
use App\Models\Students;
use App\Models\Curriculum;
use App\Models\Departments;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function students(){
        $departments = Departments::all();

        return view('admin/students/index',compact('departments'));
    }

    public function studentList(Request $request){
        $course = Courses::find($request->input('id'))->first();
        $students = Students::join('curriculum','students.curriculum','=','curriculum.id')
                            ->where('students.course',$course->id)
                            ->get(['students.*', 'curriculum.curriculumName']);

        $info = [
            "course"        => $course,
            "students"      => $students
        ];
        return view('admin.students.students',compact('info'));
    }


    public function addStudentPage(Request $request){
        $courseID = $request->input('id');

        return view('admin.students.new',compact('courseID'));
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
            "course"        => "required"
        ]);

        $curriculum     = Curriculum::where('course',$request->input('course'))->orderBy('created_at','desc')->first();

        $request->merge([
            "curriculum" => $curriculum->id
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
            "msg"       => "Successfully add new employee.",
            "id"        => $request->input('course')
        ]);
    }

}
