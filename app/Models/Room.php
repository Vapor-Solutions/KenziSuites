<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;

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

    public function isBookedBetween($date1, $date2)
    {
        foreach ($this->bookings as $booking) {
             if ($booking->isActiveBetween($date1, $date2)) {
                return true;
             }
        }

        return false;
    }
}
