<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ApplicantsController;
use Illuminate\Support\Facades\Route;

// Register Routes
Route::get('/register', [UserController::class, 'create'])->name('register');
Route::post('/register', [UserController::class, 'store'])->name('register.store');

// Login Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

// Admin Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    
    Route::get('/applicants', [ApplicantsController::class, 'index'])->name('applicants');
    Route::post('applicant/approve/{id}', [ApplicantsController::class, 'approveApplicant'])->name('approveApplicant');
    Route::post('applicant/remove/{id}', [ApplicantsController::class, 'removeApplicant'])->name('removeApplicant');
    
});