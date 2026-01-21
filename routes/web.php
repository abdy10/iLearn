<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/teachers', [TeacherController::class, 'index']);

Route::get('/teachers/{id}', [TeacherController::class, 'show']);

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/{id}', [StudentController::class, 'show']);


// Route::get('/departments', [DepartmentController::class, 'index']);

// Route::get('/employees', [EmployeeController::class, 'index']);

