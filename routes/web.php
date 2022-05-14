<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('login');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/employees',[EmployeeController::class,'index']);

Route::get('/employees-create',[EmployeeController::class,'create'])->name('employees-create');
Route::post('/add-employee',[EmployeeController::class,'store'])->name('add-employee');

Route::get('/get-employee-by-id/{employee}',[EmployeeController::class,'show']);

Route::get('/employee-edit/{employee}',[EmployeeController::class,'edit']);
Route::post('/update-employee/{id}',[EmployeeController::class,'updateEmployee'])->name('update-employee');

Route::get('/companies',[CompaniesController::class,'index']);
Route::get('/create-company',[CompaniesController::class,'create'])->name('create-company');
Route::post('/add-company',[CompaniesController::class,'store'])->name('add-company');
// Route::get('/show-data',[CompaniesController::class,'show'])->name('show-data');

// Route::Resource('employees', EmployeeController::class);