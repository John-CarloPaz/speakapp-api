<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'register']);

//Reports
Route::post('/report', [\App\Http\Controllers\ReportController::class, 'generateReport']);
Route::get('/reports', [\App\Http\Controllers\ReportController::class, 'getAllReports']);
Route::get('/reports/user/{id}', [\App\Http\Controllers\ReportController::class, 'getReportByUserId']);
Route::get('/reports/department/{department}', [\App\Http\Controllers\ReportController::class, 'getReportByDepartment']);
Route::get('/reports/building/{building}', [\App\Http\Controllers\ReportController::class, 'getReportByBuilding']);
Route::get('/reports/room/{room}', [\App\Http\Controllers\ReportController::class, 'getReportByRoom']);
Route::get('/reports/type/{type}', [\App\Http\Controllers\ReportController::class, 'getReportByType']);
Route::get('/reports/status/{status}', [\App\Http\Controllers\ReportController::class, 'getReportByStatus']);

