<?php

use App\Http\Controllers\FacultyAPIController;
use App\Http\Controllers\ProgramAPIController;
use App\Http\Controllers\StudentAPIController;
use App\Http\Controllers\VaccineAPIController;
use App\Http\Controllers\VaccineRecordAPIController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::resource('/student', StudentAPIController::class);
Route::get('/student/search/{name}', [StudentAPIController::class,'search']);

Route::resource('/faculty', FacultyAPIController::class);
Route::get('/faculty/search/{name}', [FacultyAPIController::class,'search']);

Route::resource('/program', ProgramAPIController::class);
Route::get('/program/search/{name}', [ProgramAPIController::class,'search']);

Route::resource('/vaccine', VaccineAPIController::class);
Route::get('/vaccine/search/{name}', [VaccineAPIController::class,'search']);

Route::resource('/vaccine_record', VaccineRecordAPIController::class);
Route::get('/vaccine_record/search/{name}', [VaccineRecordAPIController::class,'search']);

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout']);
