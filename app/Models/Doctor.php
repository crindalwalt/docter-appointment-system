<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;
    public function department (){
        return $this->belongsTo(Department::class,"department_id");
    }

    public function booking (){
        return $this->hasMany(Booking::class,"booking_id");
    }
}
