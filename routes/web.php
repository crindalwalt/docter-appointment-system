<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('patient.home');
})->name('patient.home');
Route::get('/doctors', action: function () {
    return view('patient.doctors');
})->name('patient.doctors');
Route::get('/appointment', function () {
    return view('patient.appointment');
})->name('patient.appointment');
Route::get('/contact', function () {
    return view('patient.contact');
})->name('patient.contact');
Route::get('/about', function () {
    return view('patient.about');
})->name('patient.about');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
