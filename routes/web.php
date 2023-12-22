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

Route::get('/', function () {
    return view('portal');
});

Route::get('/studentLogin',[StudentLoginController::class,'show'])->middleware('guest')->name('studentLogin');
Route::post('/studentLogin',[StudentLoginController::class,'login'])->middleware('guest');
Route::get('/studentLogout',[StudentLoginController::class,'logout']);

Route::get('/employeeLogin',[EmployeeLoginController::class,'show'])->middleware('guest')->name('employeeLogin');
Route::post('/employeeLogin',[EmployeeLoginController::class,'login'])->middleware('guest');
Route::get('/employeeLogout',[EmployeeLoginController::class,'logout']);


Route::middleware(['auth','user-role:admin'])->group(function(){

});

Route::middleware(['auth','user-role:student'])->group(function(){

});

Route::middleware(['auth','user-role:employee'])->group(function(){

});
