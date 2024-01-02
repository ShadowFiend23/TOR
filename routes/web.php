<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoAdminController;
use App\Http\Controllers\DepartmentHeadController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\RubricsController;
use App\Http\Controllers\SchoolYearController;
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

        # Admin CoAdmin Routes
        Route::get('/co-admin',[CoAdminController::class,'coAdmin'])->name('coAdmin');
        Route::get('/co-admin/new',[CoAdminController::class,'addCoAdminPage'])->name('addCoAdmin');
        Route::get('/co-admin/edit',[CoAdminController::class,'editCoAdminPage'])->name('editCoAdmin');
        Route::post('/saveCoAdmin',[CoAdminController::class,'saveCoAdmin'])->name('saveCoAdmin');
        Route::post('/deleteCoAdmin',[CoAdminController::class,'deleteCoAdmin']);

        # Admin Students Routes
        Route::get('/students',[StudentsController::class,'students'])->name('students');
        Route::get('/addStudents',[StudentsController::class,'addStudentPage'])->name('addStudents');
        Route::get('/editStudents',[StudentsController::class,'editStudentPage'])->name('editStudents');
        Route::post('/saveStudents',[StudentsController::class,'saveStudent'])->name('saveStudents');
        Route::post('/deleteStudents',[StudentsController::class,'deleteStudent']);

        # Admin School Year
        Route::get('/admin/school-year',[SchoolYearController::class,'schoolYear'])->name('schoolYear');

        # Admin Rubrics
        Route::get('/rubrics', [RubricsController::class,'rubrics'])->name('rubrics');
        Route::get('/rubrics/edit', [RubricsController::class,'editRubrics'])->name('editRubrics');
    });

});

Route::middleware(['auth','user-role:employee'])->group(function(){
    Route::middleware('permission:department-head')->group(function(){
        Route::get('/department',[DepartmentHeadController::class,'dashboard'])->name('department');

        Route::get('/curriculum', [DepartmentHeadController::class,'curriculum'])->name('curriculum');
        Route::get('/curriculum/show',[DepartmentHeadController::class,'showCurriculum']);
        Route::get('/curriculum/edit',[DepartmentHeadController::class,'editCurriculum']);
        Route::get('/curriculum/new',[DepartmentHeadController::class,'addCurriculum']);
        Route::get('/curriculum_list',[DepartmentHeadController::class,'curriculumList']);

        Route::get('/course/add', [DepartmentHeadController::class,'addCourse'])->name('addCourse');
        Route::get('/course/edit', [DepartmentHeadController::class,'editCourse']);
        Route::post('/saveCourse', [DepartmentHeadController::class,'saveCourse']);
    });

    Route::middleware('permission:registrar')->group(function(){
        Route::get('/registrar', function () { return "Registrar Page"; })->name('registrar');
    });
});

Route::middleware(['auth','user-role:student'])->group(function(){

});
