<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeListController;
use App\Http\Controllers\EmployeeController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [EmployeeListController::class, 'index'])->name('home');

Route::get('/employee', [EmployeeController::class, 'index']);
Route::post('/employee-created', [EmployeeController::class, 'create'])->name('create');