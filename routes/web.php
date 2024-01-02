<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\EmployeeLoginController;

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

Route::get('/', function () { return view('landing'); });

# Admin routes
Route::get('/admin', function () { return view('admin/index'); });

Route::get('/otp', function () { return view('/otp'); });

Route::get('/admin/employees', function () { return view('admin/employees/index'); });
Route::get('/admin/employees/new', function () { return view('admin/employees/new'); });
Route::get('/admin/employees/archived', function () { return view('admin/employees/archived'); });
Route::get('/admin/employees/registration', function () { return view('admin/employees/registration'); });

Route::get('/admin/co_admins', function () { return view('admin/co_admins/index'); });
Route::get('/admin/co_admins/new', function () { return view('admin/co_admins/new'); });
Route::get('/admin/co_admins/archived', function () { return view('admin/co_admins/archived'); });

Route::get('/admin/departments', function () { return view('admin/departments/index'); });
Route::get('/admin/departments/new', function () { return view('admin/departments/new'); });
Route::get('/admin/departments/edit', function () { return view('admin/departments/edit'); });

Route::get('/admin/school_year', function () { return view('admin/school_year/index'); });

Route::get('/admin/students', function () { return view('admin/students/index'); });
Route::get('/admin/courses', function () { return view('admin/students/courses'); });
Route::get('/admin/course_id/students', function () { return view('admin/students/students'); });
Route::get('/admin/course_id/students/new', function () { return view('admin/students/new'); });
Route::get('/admin/course_id/students/archived', function () { return view('admin/students/archived'); });

Route::get('/admin/rubrics', function () { return view('admin/rubrics/index'); });
Route::get('/admin/rubrics/edit', function () { return view('admin/rubrics/edit'); });


# Department routes
Route::get('/department', function () { return view('department/index'); });

# Course routes
Route::get('/course/edit', function () { return view('course/edit'); });
Route::get('/course/new', function () { return view('course/new'); });

# Curriculum
Route::get('/curriculum', function () { return view('curriculum/index'); });
Route::get('/curriculum/show', function () { return view('curriculum/show'); });
Route::get('/curriculum/edit', function () { return view('curriculum/edit'); });

Route::get('/studentLogin',[StudentLoginController::class,'show'])->middleware('guest')->name('studentLogin');
Route::post('/studentLogin',[StudentLoginController::class,'login'])->middleware('guest');
Route::get('/studentLogout',[StudentLoginController::class,'logout']);

Route::get('/employeeLogin',[EmployeeLoginController::class,'show'])->middleware('guest')->name('employeeLogin');
Route::post('/employeeLogin',[StudentLoginController::class,'login'])->middleware('guest');
Route::get('/employeeLogout',[StudentLoginController::class,'logout']);
