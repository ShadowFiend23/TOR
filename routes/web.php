<?php

use App\Http\Controllers\CoAdminController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DepartmentsController;
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
    return view('login');
});

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/studentLogin',[StudentLoginController::class,'show'])->middleware('guest')->name('studentLogin');
Route::post('/studentLogin',[StudentLoginController::class,'login'])->middleware('guest');
Route::get('/studentLogout',[StudentLoginController::class,'logout']);

Route::get('/employeeLogin',[EmployeeLoginController::class,'show'])->middleware('guest')->name('employeeLogin');
Route::post('/employeeLogin',[EmployeeLoginController::class,'login'])->middleware('guest');
Route::get('/employeeLogout',[EmployeeLoginController::class,'logout']);


Route::middleware(['auth','user-role:admin'])->group(function(){
    Route::get('/admin',[EmployeesController::class,'index'])->name('admin');

    //Admin Employees Routes
    Route::get('/employees',[EmployeesController::class,'employees'])->name('employees');
    Route::get('/addEmployee',[EmployeesController::class,'addEmployeePage'])->name('addEmployee');
    Route::get('/editEmployee',[EmployeesController::class,'editEmployeePage'])->name('editEmployee');
    Route::post('/saveEmployee',[EmployeesController::class,'saveEmployee'])->name('saveEmployee');
    Route::post('/deleteEmployee',[EmployeesController::class,'deleteEmployee']);

    //Admin Department Routes
    Route::get('/departments',[DepartmentsController::class,'departments'])->name('departments');
    Route::get('/addDepartment',[DepartmentsController::class,'addDepartmentPage'])->name('addDepartment');
    Route::get('/editDepartment',[DepartmentsController::class,'editDepartmentPage'])->name('editDepartment');
    Route::post('/saveDepartment',[DepartmentsController::class,'saveDepartment'])->name('saveDepartment');
    Route::post('/deleteDepartment',[DepartmentsController::class,'deleteDepartment']);

    //Admin CoAdmin Routes
    Route::get('/coAdmin',[CoAdminController::class,'coAdmin'])->name('coAdmin');
    Route::get('/addCoAdmin',[CoAdminController::class,'addCoAdminPage'])->name('addCoAdmin');
    Route::get('/editCoAdmin',[CoAdminController::class,'editCoAdminPage'])->name('editCoAdmin');
    Route::post('/saveCoAdmin',[CoAdminController::class,'saveCoAdmin'])->name('saveCoAdmin');
    Route::post('/deleteCoAdmin',[CoAdminController::class,'deleteCoAdmin']);
});

Route::middleware(['auth','user-role:student'])->group(function(){

});

Route::middleware(['auth','user-role:employee'])->group(function(){

});
