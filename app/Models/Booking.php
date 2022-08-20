<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $appends = [
        'nights_stayed',
        'total_cost_kes',
        'is_active'
    ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function getNightsStayedAttribute()
    {
        return Carbon::parse($this->check_in)->diffInDays(Carbon::parse($this->check_out)) - 1;
    }

    public function getIsActiveAttribute()
    {
        if ($this->check_out) {
            return Carbon::now()->lessThan(Carbon::parse($this->check_out)->addDay()->toDate());
        }

        return false;
    }

    public function getTotalCostKesAttribute()
    {
        $pernight = $this->room->roomType->price_kes;
        $days = $this->nights_stayed;

        return $days * $pernight;
    }
}
