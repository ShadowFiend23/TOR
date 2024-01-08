<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Curriculum;
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
    public function curriculum(Request $request){
        $curriculums = Curriculum::join('courses','curriculum.course','=','courses.id')
                                ->where('curriculum.course','=',$request->input('id'))
                                ->get(['curriculum.*', 'courses.courseName']);
        return view('curriculum/index',compact('curriculums'));
    }

    public function curriculumList(){
        $curriculums = Curriculum::join('courses','curriculum.course','=','courses.id')
                                ->get(['curriculum.*', 'courses.courseName']);

        return view('curriculum_list/index',compact('curriculums'));
    }

    public function showCurriculum(Request $request){
        $curriculum = Curriculum::join('courses','curriculum.course','=','courses.id')
                                ->where('curriculum.id','=',$request->input('id'))
                                ->get(['curriculum.*', 'courses.courseName'])->first();
        return view('curriculum/show',compact('curriculum'));
    }

    public function addCurriculum(Request $request){
        $curriculum = Curriculum::find($request->input('id'));
        return view('curriculum/new',compact('curriculum'));
    }

    public function editCurriculum(){
        return view('curriculum/edit');
    }

    public function saveCurriculum(Request $request){
        $request->validate([
            "curriculumName"    => "required",
        ]);

        $result = Curriculum::create($request->all());

        if($result){
            return response()->json([
                "success"   => true,
                "id"        => $result->id
            ]);
        }else{
            return response()->json([
                "success"   => false,
                "result" => $result
            ]);
        }
    }

    public function saveCurriculumName(Request $request){
        $request->validate([
            "id"             => "required",
            "curriculumName" => "required"
        ]);

        $result = Curriculum::whereId($request->input('id'))->update($request->only('curriculumName'));

        if($result){
            return response()->json([
                "success" => true
            ]);
        }else{
            return response()->json([
                "success" => false
            ]);
        }
    }

    public function saveSubjects(Request $request){
        $request->validate([
            "subjectCode.*" => "required",
            "description.*" => "required",
            "credits.*" => "required"
        ]);

        $info = json_encode($request->except('id'));
        $result = Curriculum::whereId($request->input('id'))->update([ "info" => $info]);
        if($result){
            return response()->json([
                "success" => true,
                "id"    => Curriculum::find($request->id)->pluck('course')->first()
            ]);
        }else{
            return response()->json([
                "success" => false
            ]);
        }
    }
}
