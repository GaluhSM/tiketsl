<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }

    public function seats() {
        return $this->belongsToMany(Seat::class, 'booking_seat');
    }

}
