<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmployeeController;

// Route::post('/emp', EmpController::class.'@getData');

Route::post('/employee', EmployeeController::class.'@save' );

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form',function(){
    return view('form');
});
