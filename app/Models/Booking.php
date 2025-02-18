<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    public function user(){
             return $this->hasMany(User::class);
    }
    
    public function doctor(){
        return $this->hasMany(Doctor::class);
}
}

