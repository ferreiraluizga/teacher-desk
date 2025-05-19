<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AverageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('/students', StudentController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/averages', AverageController::class);
