<?php

namespace App\Http\Livewire\Admin\Bookings;

use App\Models\Booking;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class Calendar extends Component
{
    public $active_date,$year, $month, $weeks;

    public $bookings=[];

    public function mount()
    {
        $this->active_date = Carbon::now();

        $bookings = Booking::all();

        foreach ($bookings as $booking) {
            if ($booking->isActiveDuring($this->active_date)) {
                array_push($this->bookings, $booking);
            }
        }
    }
    public function previousDay()
    {
        $this->active_date->subDay();
        $this->bookings=[];
        $bookings = Booking::all();
        foreach ($bookings as $booking) {
            if ($booking->isActiveDuring($this->active_date)) {
                array_push($this->bookings, $booking);
            }
        }

    }
    public function nextDay()
    {
        $this->active_date->addDay();
        $this->bookings = [];
        $bookings = Booking::all();
        foreach ($bookings as $booking) {
            if ($booking->isActiveDuring($this->active_date)) {
                array_push($this->bookings, $booking);
            }
        }
    }

    public function render()
    {
        return view('livewire.admin.bookings.calendar');
    }
}
