<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return redirect()->route('departments.index');
});

Route::resource('departments', DepartmentController::class);
Route::resource('employees', EmployeeController::class);
