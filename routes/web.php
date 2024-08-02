<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccineRecordController;
use App\Http\Controllers\VaccineYearChartController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('faculty',FacultyController::class,);
Route::resource('program',ProgramController::class,);
Route::resource('student',StudentController::class,);
Route::resource('vaccine',VaccineController::class,);
Route::resource('vaccine_record',VaccineRecordController::class,);
Route::get('vaccine_year_chart',[VaccineYearChartController::class,'index']);
