<?php

use App\Http\Controllers\AverageController;
use App\Http\Controllers\ClassModelController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('/students', StudentController::class);

Route::resource('/classes', ClassModelController::class);

Route::resource('/averages', AverageController::class);