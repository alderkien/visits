<?php

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

Route::get('/', 'EmployeesController@dashboard')->name('home');
Route::resource('employees', 'EmployeesController');
Route::resource('employees.visits', 'Employee\VisitsController', ['only' => ['create', 'store', 'destroy']]);
