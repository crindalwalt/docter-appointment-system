<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    public function user(){
             return $this->belongsTo(User::class,"user_id");
    }

    public function doctor(){
        return $this->belongsTo(Doctor::class,"doctor_id");
}
}

