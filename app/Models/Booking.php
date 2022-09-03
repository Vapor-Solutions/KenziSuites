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
        return Carbon::parse($this->check_in)->diffInDays(Carbon::parse($this->check_out) ?? Carbon::now());
    }

    public function getIsActiveAttribute()
    {
        if ($this->check_out) {
            return Carbon::now()->lessThan(Carbon::parse($this->check_out)->addDay()->toDate());
        }

        return false;
    }
    public function isActiveDuring($date)
    {
        if ($this->check_out) {
            return Carbon::parse($date)->between(Carbon::parse($this->check_in)->subDay()->toDateString(), Carbon::parse($this->check_out)->addDay()->toDateString());
        }

        return false;
    }
    public function isActiveBetween($date1, $date2)
    {
        if (Carbon::parse($date1)->lessThan(Carbon::parse($date2))) {
            if (Carbon::parse($date1)->lessThan(Carbon::parse($this->check_in))) {
                return Carbon::parse($date2)->greaterThanOrEqualTo(Carbon::parse($this->check_in));
            } elseif (Carbon::parse($date1)->isBetween(Carbon::parse($this->check_in)->toDate(), Carbon::parse($this->check_out)->toDate())) {
                return true;
            } elseif (Carbon::parse($date1)->greaterThanOrEqualTo(Carbon::parse($this->check_out))) {
                return false;
            }
        } elseif (Carbon::parse($date1)->greaterThanOrEqualTo(Carbon::parse($date2))) {
            if (Carbon::parse($date2)->lessThan(Carbon::parse($this->check_in))) {
                return Carbon::parse($date1)->greaterThanOrEqualTo(Carbon::parse($this->check_in));
            } elseif (Carbon::parse($date2)->isBetween(Carbon::parse($this->check_in)->toDate(), Carbon::parse($this->check_out)->toDate())) {
                return true;
            } elseif (Carbon::parse($date2)->greaterThanOrEqualTo(Carbon::parse($this->check_out))) {
                return false;
            }
        }
    }

    public function getTotalCostKesAttribute()
    {
        $pernight = $this->room->roomType->price_kes ?? 0;
        $days = $this->nights_stayed ?? 0;

        return $days * $pernight;
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
