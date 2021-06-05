<?php

namespace App\Models;

class Passenger extends Model
{
    public function Bookings(){
    return $this->hasMany(Booking::class);
    }
}
