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

# Department routes
Route::get('/department', function () { return view('department/index'); });

# Course routes
Route::get('/course/edit', function () { return view('course/edit'); });
Route::get('/course/new', function () { return view('course/new'); });

# Curriculum
Route::get('/curriculum', function () { return view('curriculum/index'); });
Route::get('/curriculum/show', function () { return view('curriculum/show'); });

Route::get('/studentLogin',[StudentLoginController::class,'show'])->middleware('guest')->name('studentLogin');
Route::post('/studentLogin',[StudentLoginController::class,'login'])->middleware('guest');
Route::get('/studentLogout',[StudentLoginController::class,'logout']);

Route::get('/employeeLogin',[EmployeeLoginController::class,'show'])->middleware('guest')->name('employeeLogin');
Route::post('/employeeLogin',[StudentLoginController::class,'login'])->middleware('guest');
Route::get('/employeeLogout',[StudentLoginController::class,'logout']);
