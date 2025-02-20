<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminNavigationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;

Route::get("/",[UserController::class, 'home'])->name('patient.home');
Route::get("/doctors",[UserController::class,'doctors'])->name('patient.doctors');
Route::get("/appointment",[UserController::class,'appointment'])->name('patient.appointment');
Route::get("/contact",[UserController::class,'contact'])->name('patient.contact');
Route::get("/about",[UserController::class,'about'])->name('patient.about');
// =====================================================================================
// ================================ /DOCTOR ROUTES\================================
// =====================================================================================
Route::prefix('doctor')->group(function () {
    Route::get("/dashboard",[DoctorController::class,'dashboard'])->name('doctor.dashboard');
    Route::get("/appointment",[DoctorController::class,'appointment'])->name('doctor.appointement');
    Route::get('/patients',[DoctorController::class, 'patients'])->name('doctor.patients');
    Route::get("/settings",[DoctorController::class,'settings'])->name('doctor.settings');
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
