<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminNavigationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;

Route::prefix('patient')->group(function () {
    Route::post("/dashboard",[BookingController::class,'dashboard'])->name("patient.dashboard");

});


Route::get("/",[UserController::class, 'home'])->name('patient.home');
Route::get("/doctors",[UserController::class,'doctors'])->name('patient.doctors');
Route::get("/doctors/{doctor:slug}/appointment",[UserController::class,'appointment'])->name('patient.appointment');
Route::get("/contact",[UserController::class,'contact'])->name('patient.contact');
Route::get("/about",[UserController::class,'about'])->name('patient.about');

# book an appointment
Route::post("/doctor/appointment",[BookingController::class,'store'])->name("user.appointment.book");

// TODO: azeem will create user dashboard


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/doctor.php';
require __DIR__.'/admin.php';
