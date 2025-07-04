<?php

use Illuminate\Support\Facades\Route;
use App\Models\Biodata;
use App\Http\Controllers\Admin\BiodataController;
use App\Http\Controllers\Admin\ProjectController;

//Halaman Home
Route::get('/', function () {
    $biodata = \App\Models\Biodata::first();
    $projects = \App\Models\Project::all();
    return view('home', compact('biodata', 'projects'));
})->name('home');

// Login dan Logout
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Dashboard & CRUD Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/biodata', [BiodataController::class, 'show'])->name('biodata.show');
    Route::get('/biodata/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
    Route::put('/biodata/update/{id}', [BiodataController::class, 'update'])->name('biodata.update');
    Route::resource('project', ProjectController::class)->except(['show']);
    // Profile admin
    Route::get('/profile', function () {
        $user = auth()->user();
        return view('admin.profile.show', compact('user'));
    })->name('profile.show');
});
