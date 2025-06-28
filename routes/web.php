<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WelcomeController;
use App\Models\Doctor;
use App\Http\Controllers\AppointmentController;

Route::get('/', [WelcomeController::class, 'index']);



Route::get('/', function () {
    $doctors = Doctor::all();
    return view('welcome', compact('doctors'));
});


Route::resource('doctors', DoctorController::class);


// تسجيل الدخول
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// تسجيل الخروج
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// التسجيل
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::resource('appointments', AppointmentController::class);


Route::get('/appointments/create', function () {
    $doctors = Doctor::all();
    return view('your-view-name', compact('doctors'));
});