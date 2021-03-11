<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get all employee
Route::get('employees','EmployeeController@getEmployee');

//get specific employee
Route::get('employees/{id}','EmployeeController@getEmployeeById');

//Add new Employee
Route::post('addEmployee','EmployeeController@addEmployee');


//update employee
Route::put('updateEmployee/{id}','EmployeeController@updateEmployee');

//update employee
Route::delete('deleteEmployee/{id}','EmployeeController@deleteEmployee');















