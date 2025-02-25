<?php


// =====================================================================================
// ================================ /DOCTOR ROUTES\================================
// =====================================================================================

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::prefix('doctor')->group(function () {
    Route::get("/",function (){
        return redirect()->route("doctor.dashboard");
    });
    Route::get("/dashboard",[DoctorController::class,'dashboard'])->name('doctor.dashboard');
    Route::get("/appointment",[DoctorController::class,'appointment'])->name('doctor.appointement');
    Route::get('/patients',[DoctorController::class, 'patients'])->name('doctor.patients');
    Route::get("/settings",[DoctorController::class,'settings'])->name('doctor.settings');
});
