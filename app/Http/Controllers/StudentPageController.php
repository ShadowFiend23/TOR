<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    //

    public function index(){
        $studentID = auth()->user()->userID;

        $student = Students::where('studentID',$studentID)->first();

        if(
            empty($student->birthPlace) ||
            empty($student->birthDate)
            // empty($student->elementarySchool) ||
            // empty($student->secondaryYear)
        ){
            return redirect()->route('studentApplication');
        }

        return view('student.dashboard');
    }

    public function application(){
        $studentID = auth()->user()->userID;

        $student = Students::where('studentID',$studentID)->first();

        return view('student.application',compact('student'));
    }

    public function saveApplication(Request $request){
        $studentID = auth()->user()->userID;
        $data = $request->except(['password']);

        if(!empty($request->file('photo'))){
            $path = public_path('photos/');
            !is_dir($path) &&
                mkdir($path, 0777, true);

            $imageName = $studentID . '.' . $request->photo->extension();
            $request->photo->move($path, $imageName);
            $data["photo"] = $imageName;

        }
        $query = Students::where("studentID", $studentID)
                            ->update($data);

        if(!$query){
            return response()->json([
                "success" => false
            ]);
        }

        return response()->json([
            "success"   => true,
            "route"     => route('studentDashboard')
        ]);
    }
}
