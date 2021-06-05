<?php

namespace App\Models;

class Schedule extends Model
{
         
    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
   public  function bookings(){
		
		return $this->hasMany(Booking::class);
	}
  
}
