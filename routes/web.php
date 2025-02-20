<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminNavigationController;
use App\Http\Controllers\DoctorController;

Route::view('/', 'patient.home')->name('patient.home');
Route::view('/doctors', 'patient.doctors')->name('patient.doctors');
Route::view('/appointment', 'patient.appointment')->name('patient.appointment');
Route::view('/contact', 'patient.contact')->name('patient.contact');
Route::view('/about', 'patient.about')->name('patient.about');
// =====================================================================================
// ================================ /DOCTOR ROUTES\================================
// =====================================================================================
Route::prefix('doctor')->group(function () {
    Route::view('/dashboard', 'doctor.dashboard')->name('doctor.dashboard');
    Route::view('/appointements', 'doctor.appointement')->name('doctor.appointement');
    Route::get('/patients',[DoctorController::class, 'patients'])->name('doctor.patients');
    Route::view('/settings', 'doctor.settings')->name('doctor.settings');
});

Route::prefix('admin')->group(function () {
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');
    Route::get('/doctors',[AdminController::class,'index'])->name('admin.doctors');
    Route::get('/patients',[AdminController::class,'patients'])->name('admin.patients');
    Route::view('/appointements', 'admin.appointments')->name('admin.appointements');
    Route::view('/departments', 'admin.departments')->name('admin.departments');
    Route::view('/settings', 'admin.settings')->name('admin.settings');
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
