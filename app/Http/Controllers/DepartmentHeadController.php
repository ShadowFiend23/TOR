<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DepartmentHeadController extends Controller
{
    //
    public function dashboard(){
        $courses = Courses::leftJoin('students','courses.id','=','students.course')->get(['courses.*','students.studentID']);

        return view('department/index',compact('courses'));
    }

    #Course

    public function addCourse(){
        $info = [
            'title'     => "Add Course",
            'button'    => "Submit"
        ];

        return view('course/form',compact('info'));
    }

    public function editCourse(Request $request){
        try{
            $course = Courses::findOrFail($request->input('id'));

            $info = [
                'title'     => "Edit Course",
                'button'    => "Update",
                'data'      => $course
            ];

            return view('course/form',compact('info'));
        }catch(ModelNotFoundException $e){
            dd($e);
        }
    }

    public function saveCourse(Request $request){
        $request->validate([
            "courseName"    => "required|unique:courses,courseName",
            "inChargeID"    => "required|exists:employees,id",
            "acronym"       => "required",
            "color"         => "required",
        ]);

        $query = Courses::create($request->all());

        // if($query){

        // }else{

        // }
    }

    # Curriculum
    public function curriculum(){
        return view('curriculum/index');
    }

    public function curriculumList(){
        return view('curriculum_list/index');
    }

    public function showCurriculum(){
        return view('curriculum/show');
    }

    public function addCurriculum(){
        return view('curriculum/new');
    }

    public function editCurriculum(){
        return view('curriculum/edit');
    }

}
