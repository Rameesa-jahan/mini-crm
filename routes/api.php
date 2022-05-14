<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::delete('/delete-employees/{employee}',[EmployeeController::class,'destroy']);

Route::Resource('companies', CompaniesController::class);
Route::Resource('employees', EmployeeController::class);
Route::get('/show-data',[CompaniesController::class,'show'])->name('show-data');

Route::get('checkEmployee',[EmployeeController::class,'check']);