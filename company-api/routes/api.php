<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("list-employees", [ApiController::class, "listEmployees"]);
Route::get("single-employee/{id}", [ApiController::class, "getSingleEmployee"]);
Route::post("add-employee", [ApiController::class, "CreateEmployee"]);
Route::put("update-employee/{id}", [ApiController::class, "updateEmployee"]);
Route::delete("delete-employee/{id}", [ApiController::class, "deleteEmployee"]);
