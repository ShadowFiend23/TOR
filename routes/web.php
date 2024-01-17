<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoAdminController;
use App\Http\Controllers\DepartmentHeadController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\RubricsController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\StudentPageController;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/login',[LoginController::class,'show'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'login'])->middleware('guest');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/student/login',[LoginController::class,'studentShow'])->middleware('guest')->name('studentLogin');
Route::post('/student/login',[LoginController::class,'studentLogin'])->middleware('guest');

Route::get('/registrar', function () { return view('registrar/index'); } );
Route::get('/registrar/courses', function () { return view('registrar/courses'); } );
Route::get('/registrar/courses/show', function () { return view('registrar/courses/show'); } );
Route::get('/registrar/tor_request', function () { return view('registrar/tor_request'); } );
Route::get('/registrar/tor_request/show', function () { return view('registrar/tor_request/show'); } );
Route::get('/registrar/curriculums', function () { return view('registrar/curriculums'); } );
Route::get('/registrar/curriculums/show', function () { return view('registrar/curriculums/show'); } );

Route::get('/registrar/tor_analysis', function () { return view('registrar/tor_analysis'); } );
Route::get('/registrar/logs', function () { return view('registrar/logs'); } );

//Route::get('/student/login', function () { return view('student/login'); } );


Route::middleware(['auth','user-role:admin'])->group(function(){

    Route::get('/admin',[EmployeesController::class,'index'])->name('admin');

    # Admin Employees Routes
    Route::prefix('admin')->group(function () {
        Route::get('/employees',[EmployeesController::class,'employees'])->name('employees');
        Route::get('/employees/new',[EmployeesController::class,'addEmployeePage'])->name('addEmployee');
        Route::get('/employees/edit',[EmployeesController::class,'editEmployeePage'])->name('editEmployee');
        Route::get('/employees/archived',[EmployeesController::class,'archivedPage'])->name('archivedEmployee');
        Route::post('/saveEmployee',[EmployeesController::class,'saveEmployee'])->name('saveEmployee');
        Route::get('/deleteEmployee',[EmployeesController::class,'deleteEmployee'])->name('deleteEmployee');

        # Admin Department Routes
        Route::get('/departments',[DepartmentsController::class,'departments'])->name('departments');
        Route::get('/departments/new',[DepartmentsController::class,'addDepartmentPage'])->name('addDepartment');
        Route::get('/departments/edit',[DepartmentsController::class,'editDepartmentPage'])->name('editDepartment');
        Route::post('/saveDepartment',[DepartmentsController::class,'saveDepartment'])->name('saveDepartment');
        Route::post('/deleteDepartment',[DepartmentsController::class,'deleteDepartment']);
        Route::post('/getDepartmentHeadInfo',[DepartmentsController::class,'getDepartmentHeadInfo']);

        Route::get('/courses',[DepartmentsController::class,'courses']);

        # Admin CoAdmin Routes
        Route::get('/co-admin',[CoAdminController::class,'coAdmin'])->name('coAdmin');
        Route::get('/co-admin/new',[CoAdminController::class,'addCoAdminPage'])->name('addCoAdmin');
        Route::get('/co-admin/edit',[CoAdminController::class,'editCoAdminPage'])->name('editCoAdmin');
        Route::post('/saveCoAdmin',[CoAdminController::class,'saveCoAdmin'])->name('saveCoAdmin');
        Route::post('/deleteCoAdmin',[CoAdminController::class,'deleteCoAdmin']);

        # Admin Students Routes
        Route::get('/students',[StudentsController::class,'students'])->name('students');
        Route::get('/student-list',[StudentsController::class,'studentList'])->name('studentList');
        Route::get('/students/new',[StudentsController::class,'addStudentPage'])->name('addStudentPage');
        Route::get('/editStudents',[StudentsController::class,'editStudentPage'])->name('editStudents');
        Route::post('/saveStudents',[StudentsController::class,'saveStudent'])->name('saveStudents');
        Route::post('/deleteStudents',[StudentsController::class,'deleteStudent']);

        # Admin School Year
        Route::get('/school-year',[SchoolYearController::class,'schoolYear'])->name('schoolYear');
        Route::post('/saveSchoolYear',[SchoolYearController::class,'saveSchoolYear'])->name('saveSchoolYear');

        # Admin Rubrics
        Route::get('/rubrics', [RubricsController::class,'rubrics'])->name('rubrics');
        Route::get('/rubrics/edit', [RubricsController::class,'editRubrics'])->name('editRubrics');
    });

});

Route::middleware(['auth','user-role:employee'])->group(function(){
    Route::middleware('permission:department-head')->group(function(){
        Route::get('/department',[DepartmentHeadController::class,'dashboard'])->name('department');

        Route::get('/curriculum', [DepartmentHeadController::class,'curriculum'])->name('curriculum');
        Route::get('/curriculum/show',[DepartmentHeadController::class,'showCurriculum'])->name('showCurriculum');
        Route::get('/curriculum/edit',[DepartmentHeadController::class,'editCurriculum'])->name('editCurriculum');
        Route::get('/curriculum/new',[DepartmentHeadController::class,'addCurriculum']);
        Route::get('/curriculum-list',[DepartmentHeadController::class,'curriculumList'])->name('curriculumList');
        Route::post('/saveCurriculum',[DepartmentHeadController::class,'saveCurriculum']);
        Route::post('/saveCurriculumName',[DepartmentHeadController::class,'saveCurriculumName']);
        Route::post('/saveSubjects',[DepartmentHeadController::class,'saveSubjects']);

        Route::get('/course/add', [DepartmentHeadController::class,'addCourse'])->name('addCourse');
        Route::get('/course/edit', [DepartmentHeadController::class,'editCourse']);
        Route::post('/saveCourse', [DepartmentHeadController::class,'saveCourse']);

        # Students
        Route::get('/student-list',[DepartmentHeadController::class,'studentList'])->name('depStudentList');
        Route::get('/regular',[DepartmentHeadController::class,'regular'])->name('regular');
        Route::post('/regular/new',[DepartmentHeadController::class,'addRegular'])->name('addRegular');
        Route::get('/regular/show',[DepartmentHeadController::class,'showRegular'])->name('showRegular');
        Route::get('/regular/edit',[DepartmentHeadController::class,'editRegular'])->name('editRegular');
        Route::post('/saveEnrollment',[DepartmentHeadController::class,'saveEnrollment'])->name('saveEnrollment');
        Route::post('/saveGrades',[DepartmentHeadController::class,'saveGrades'])->name('saveGrades');
        Route::post('/checkEnroll',[DepartmentHeadController::class,'checkEnroll'])->name('checkEnroll');
    });

    Route::middleware('permission:registrar')->group(function(){
        Route::get('/registrar',[RegistrarController::class,'registrar'])->name('registrar');
        Route::get('/tor-request',[RegistrarController::class,'torRequest'])->name('torRequest');
        Route::get('/view-tor',[RegistrarController::class,'viewTor'])->name('viewTor');
        Route::get('/fetchTorData',[RegistrarController::class,'fetchTorData']);
    });
});


Route::get('/department/incharge', function () { return view('/department/incharge/index'); });

Route::middleware(['auth','user-role:student'])->group(function(){

    //Route::get('/student/register', function () { return view('student/register'); } );
    //Route::get('/student/otp', function () { return view('student/otp'); } );
    // Route::get('/student/application', function () { return view('student/application'); } );
    Route::get('/student/dashboard', [StudentPageController::class,'index'])->name('studentDashboard');
    Route::get('/student/application', [StudentPageController::class,'application'])->name('studentApplication');
    Route::post('/saveApplication', [StudentPageController::class,'saveApplication']);
    // Route::get('/student/update_photo', function () { return view('student/update_photo'); } );
    // Route::get('/student/update_password', function () { return view('student/update_password'); } );
    // Route::get('/student/request_tor', function () { return view('student/request_tor'); } );
    // Route::get('/student/pending', function () { return view('student/pending'); } );
    // Route::get('/student/recieved', function () { return view('student/recieved'); } );
    // Route::get('/student/history_logs', function () { return view('student/history_logs'); } );
    // Route::get('/student/evaluation', function () { return view('student/evaluation'); } );
    // Route::get('/student/evaluation_result', function () { return view('student/evaluation_result'); } );
    // Route::get('/student/grades', function () { return view('student/grades'); } );
});



// Route::get('/enrollment', function () { return view('/enrollment/index'); });
// Route::get('/enrollment/new', function () { return view('/enrollment/new'); }); //only for transferee

// # Regular student
// Route::get('/enrollment/regular/new', function () { return view('/enrollment/regular/new'); });
// Route::get('/enrollment/regular/show', function () { return view('/enrollment/regular/show'); });
// Route::get('/enrollment/regular/edit', function () { return view('/enrollment/regular/edit'); });


// # Irregular Student
// Route::get('/enrollment/irregular', function () { return view('/enrollment/irregular/index'); });
// Route::get('/enrollment/irregular/new', function () { return view('/enrollment/irregular/new'); });
// Route::get('/enrollment/irregular/show', function () { return view('/enrollment/irregular/show'); });
// Route::get('/enrollment/irregular/edit', function () { return view('/enrollment/irregular/edit'); });


// ## Transferee Student
// Route::get('/enrollment/transferee', function () { return view('/enrollment/transferee/index'); });
// Route::get('/enrollment/transferee/new', function () { return view('/enrollment/transferee/new'); });
// Route::get('/enrollment/transferee/show', function () { return view('/enrollment/transferee/show'); });
// Route::get('/enrollment/transferee/edit', function () { return view('/enrollment/transferee/edit'); });


// ## Shiftee Student

// Route::get('/enrollment/shiftee', function () { return view('/enrollment/shiftee/index'); });
// Route::get('/enrollment/shiftee/show', function () { return view('/enrollment/shiftee/show'); });
// Route::get('/enrollment/shiftee/edit', function () { return view('/enrollment/shiftee/edit'); });
// # Namespace of Shiftee
// Route::get('/enrollment/shiftee/transfer_of_records', function () { return view('/enrollment/shiftee/transfer_of_records/index'); });



// Route::get('/latin_honor_application', function () { return view('/latin_honor_application/index'); });
// Route::get('/latin_honor_application/review', function () { return view('/latin_honor_application/review/index'); });
// Route::get('/latin_honor_application/denied_application', function () { return view('/latin_honor_application/denied_application/index'); });
// Route::get('/latin_honor_application/denied_application/review', function () { return view('/latin_honor_application/denied_application//review/index'); });


// Route::get('/latin_honor_application/approved_students', function () { return view('/latin_honor_application/approved_students/index'); });




// Route::get('/latin_honor_final_list', function () { return view('/latin_honor_final_list/index'); });
// Route::get('/latin_honor_final_list/latin_honor', function () { return view('/latin_honor_final_list/latin_honor/index'); });
// Route::get('/latin_honor_final_list/latin_honor/archive', function () { return view('/latin_honor_final_list/latin_honor/archive'); });
// Route::get('/latin_honor_final_list/latin_honor/show', function () { return view('/latin_honor_final_list/latin_honor/show'); });


// Route::get('/latin_honor_final_list/academic_achiever', function () { return view('/latin_honor_final_list/academic_achiever/index'); });
// Route::get('/latin_honor_final_list/academic_achiever/archive', function () { return view('/latin_honor_final_list/academic_achiever/archive'); });
// Route::get('/latin_honor_final_list/academic_achiever/show', function () { return view('/latin_honor_final_list/academic_achiever/show'); });

# Evaluator Side

Route::get('/terms_and_conditions', function () { return view('/terms_and_conditions/index');});

Route::get('/evaluator/login', function () { return view('/evaluator/login');});
Route::get('/evaluator/register', function () { return view('/evaluator/register');});
Route::get('/evaluator/otp', function () { return view('/evaluator/otp');});
Route::get('/evaluator/confirmation', function () { return view('/evaluator/confirmation');});


# Interviewer Dashboard
Route::get('/evaluator/dashboard', function () { return view('/evaluator/dashboard');});
Route::get('/evaluator', function () { return view('/evaluator/index');});
Route::get('/evaluator/show', function () { return view('/evaluator/show');});

Route::get('/evaluator/student/show', function () { return view('/evaluator/student/show');});
# Saso Side
Route::get('/saso', function () { return view('/saso/index');});
