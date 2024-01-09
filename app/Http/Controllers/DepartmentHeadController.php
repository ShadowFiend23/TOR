<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Students;
use App\Models\Employees;
use App\Models\Curriculum;
use App\Models\Departments;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DepartmentHeadController extends Controller
{
    //
    public function dashboard(){
        $department = Departments::where('departmentHead',auth()->user()->userID)->first();
        $courses = Courses::where('departmentID',$department->id)->get();

        return view('department/index',compact('courses'));
    }

    public function studentList(Request $request){
        $course = Courses::find($request->input('id'))->first();
        $students = Students::where('course',$course->id)->get();
        $curriculum = Curriculum::where('course',$course->id)->orderBy('created_at','desc')->first();

        $info = [
            "course"        => $course,
            "students"      => $students,
            "curriculum"    => $curriculum
        ];

        return view('enrollment.index',compact('info'));
    }

    #Course

    public function addCourse(){
        $inCharge = Employees::where('roleCode','=','in-charge')
                            ->whereRaw('(designation = "" OR designation IS NULL)')
                            ->get();

        $info = [
            'title'     => "Add Course",
            'button'    => "Submit",
            'inCharge'  => $inCharge
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

        $department = Departments::where('departmentHead',auth()->user()->userID)->first();
        $request->merge(["departmentID" => $department->id]);

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
        $department = Departments::where('departmentHead',auth()->user()->userID)->first();

        $result = Curriculum::whereId($request->input('id'))->update(
            [
                "info" => $info,
                "departmentID" => $department->id
            ]
        );
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

    #enrollment

    public function regular(){

    }

    public function addRegular(Request $request){
        $data = $request->only(['studentID','studentType']);
        $credentials = array_keys($request->except(['_token','studentID','studentType']));
        $student = Students::where('studentID',$data['studentID'])->first();
        $course = Courses::find($student->course);

        $curriculum = Curriculum::where('course',$student->course)->orderBy('created_at','desc')->first();

        $info = [
            "data" => $data,
            "credentials" => $credentials,
            "subjects" => $curriculum->info,
            "course"    => $course
        ];

        return view('enrollment.regular.new',compact('info'));
    }

    public function saveRegular(Request $request){
        //$studentID = $request
    }
}
