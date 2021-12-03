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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('administrators',App\Http\Controllers\AdministratorController::class);

Route::resource('teachers',App\Http\Controllers\TeacherController::class);

Route::resource('students',App\Http\Controllers\StudentController::class);

Route::resource('paters',App\Http\Controllers\PaterController::class);

Route::resource('courses',App\Http\Controllers\CourseController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
