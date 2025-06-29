<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Doctor Resource
Route::resource('doctors', DoctorController::class);

Route::get('/doctors/{doctor}/schedule', [DoctorController::class, 'showSchedule'])
    ->name('doctors.schedule');

// حجز موعد
Route::post('/appointments/{appointment}/book', [DoctorController::class, 'bookAppointment'])
    ->name('appointments.book');