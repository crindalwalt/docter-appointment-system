<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Models\Booking;
use Illuminate\Support\Facades\Route;



// =====================================================================================
// ================================ /ADMIN ROUTES\================================
// =====================================================================================
// TODO: salman will fetch and display the appointment data to admin panel
Route::prefix('admin')->group(function () {
    Route::get("/",function (){
        return redirect()->route("admin.dashboard");
    });
    Route::get("/dashboard",[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/doctors',[AdminController::class,'index'])->name('admin.doctors');
    Route::get('/patients',[AdminController::class,'patients'])->name('admin.patients');
    Route::get("/appointment",[BookingController::class,'appointment'])->name('admin.appointements');
    Route::get("/departments",[AdminController::class,'departments'])->name('admin.departments');
    Route::get("/setting",[AdminController::class,'setting'])->name('admin.settings');
});
