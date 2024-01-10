<?php

namespace App\Http\Controllers;

use App\Models\SchoolYear;
use Illuminate\Http\Request;

class SchoolYearController extends Controller
{
    //

    public function schoolYear(){
        $schoolYear = SchoolYear::all();

        return view('admin/school_year/index',compact('schoolYear'));
    }

    public function saveSchoolYear(Request $request){
        $min = $request->input('minYear');
        $max = (int)$min + 1;

        $key = $request->input('semester') == 1 ? "firstSem" : "secondSem";
        $request->merge([
            "maxYear" => $max,
            $key => 1,
            "active" => 1
        ]);

        // if($min > date("Y")){
        //     return response()->json([
        //         "success"   => false,
        //         "msg"       => "Year is greater than the current year"
        //     ]);
        // }

        $exist = SchoolYear::where('minYear',$min)->exists();

        if(!$exist){

            SchoolYear::where("active", 1)->update(["active" => 0]);
            $query = SchoolYear::create($request->all());

            if($query){
                $response = response()->json([
                    "success" => true,
                ]);

            }else{
                $response = response()->json([
                    "success" => false,
                    "msg"   => "Server error. Try Again Later."
                ]);
            }
        }else{
            $query = SchoolYear::where('minYear',$min)->update($request->only($key));

            if($query){

                $response = response()->json([
                    "success" => true,
                ]);

            }else{

                $response = response()->json([
                    "success" => false,
                    "msg"   => "Server error. Try Again Later."
                ]);
            }
        }

        return $response;
    }
}
