<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function testimonial()
    {
        return $this->hasOne(Testimonial::class);
    }
}
