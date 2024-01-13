<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Employees;
use App\Models\Enrollees;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class RegistrarController extends Controller
{
    //

    public function registrar(){
        return view('registrar.tor_request.show');
    }

    public function torRequest(){
        $students = Students::join("courses","students.course","=","courses.id")
                        ->join("curriculum","students.curriculum","=","curriculum.id")
                        ->get(["students.*","courses.courseName","curriculum.curriculumName"]);

        return view('registrar.tor_request.index',compact('students'));
    }

    public function viewTor(){
        return view('registrar.tor_request.view');
    }

    public function fetchTorData(Request $request){
        $userID = auth()->user()->userID;
        $registrar = Employees::where('employeeID',$userID)->first();
        $studentID = $request->input('id');
        $student = Students::join("courses","students.course","=","courses.id")
                        ->where('studentID',$studentID)
                        ->first(["students.*","courses.ID as courseID", "courses.courseName","courses.acronym"]);
        $inCharge = Employees::where('roleCode','in-charge')
                            ->where('designation',$student->courseID)
                            ->first();


        $data = (object)[
            "full_name" => "$student->firstName " . $student->middleName ?? "" . "$student->lastName " . $student->suffix ?? "",
            "birth_date" => "January 1, 2002",
            "guardian" => "LOREM IPSUM",
            "ncee_percentile" => 2,
            "date_taken" => 2,
            "elementary" => "Ormoc City Central School",
            "secondary" => "Western Leyte College",
            "credentials" => 2,
            "remarks" => 2,
            "title_or_degree_conferred" => $student->courseName,
            "major" => 2,
            "date_of_graduation" => 2,
            "board_of_regents" => 2,
            "capstone_title" => 2,
            "valid_for" => "EVALUATION",
            "date" => "01/01/2023",
            "or_number" => "475212",
            "record_in_charge" => "$inCharge->firstName " . $inCharge->middleName ?? "" . "$inCharge->lastName " . $inCharge->suffix ?? "",
            "registrar" => "$registrar->firstName " . $registrar->middleName ?? "" . "$registrar->lastName " . $registrar->suffix ?? "",
            "date_of_admission" => $student->created_at,
            "address_1" => "THAT STREET ROUND THE CORNER",
            "place_of_birth" => "THAT CITY",
            "address_2" => "THAT STREET ROUND THE CORNER",
            "place" => 2,
            "course" => $student->acronym,
            "sems" => $this->getEnrolledSubject($student)
        ];

        return json_encode($data);
    }

    private function getEnrolledSubject($student){
        $curriculum     = Curriculum::where('id',$student->curriculum)->first();
        $curInfo        = json_decode($curriculum->info,true);
        $description    = $curInfo['description'];
        $credits        = $curInfo['credits'];
        $enrolledList   = Enrollees::join("school_year",'enrollees.schoolYear','=','school_year.id')
                        ->where('studentID',$student->studentID)
                        ->get([
                            "enrollees.*",
                            "school_year.minYear",
                            "school_year.maxYear"
                        ]);
        $ordinal = ["","First","Second"];

        $data = [];
        foreach($enrolledList as $enroll){
            $semsVal = (object)[
                "subjects" => []
            ];

            $semsVal->semester = "$enroll->minYear-$enroll->maxYear ". $ordinal[$enroll->semester] ." Semester";
            $subjects = explode(",",$enroll->enrolledSubjects);
            $grades = json_decode($enroll->grades,true);

            foreach($subjects as $index => $subject){
                $val = (object)[
                    "code" =>$subject,
                    "name" =>$description[$enroll->year . $enroll->semester][$index],
                    "final_rating" =>$grades[$subject],
                    "re_exam" =>"",
                    "credits" =>$credits[$enroll->year . $enroll->semester][$index],
                ];
                array_push($semsVal->subjects,$val);
            }
            array_push($data,$semsVal);
        }
        return $data;
    }
}
