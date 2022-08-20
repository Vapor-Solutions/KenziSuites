<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function roomType()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function IsBooked($date)
    {
        foreach ($this->bookings as $booking) {
            if (Carbon::parse($date)->isBetween(Carbon::parse($booking->check_in)->subDay()->toDateString(), Carbon::parse($booking->check_out)->addDay()->toDateString())) {
                return true;
            }
        }
    }
}
