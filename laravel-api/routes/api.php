<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("list-students", [ApiController::class, "listStudents"]);
Route::get("single-student/{id}", [ApiController::class, "getSingleStudent"]);
Route::post("add-student", [ApiController::class, "CreateStudent"]);
Route::put("update-student/{id}", [ApiController::class, "updateStudent"]);
Route::DELETE("delete-student/{id}", [ApiController::class, "deleteStudent"]);
