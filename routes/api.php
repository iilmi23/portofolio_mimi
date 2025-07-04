<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BiodataController;
use App\Http\Controllers\Api\ProjectController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('biodata', BiodataController::class);

Route::apiResource('projects', ProjectController::class);

