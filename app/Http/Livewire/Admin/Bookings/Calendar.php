<?php

namespace App\Http\Livewire\Admin\Bookings;

use App\Models\Booking;
use App\Models\Invoice;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class Calendar extends Component
{
    public $active_date, $year, $month, $weeks;

    public $bookings = [];

    protected $listeners =  [
        'done' => 'mount'
    ];

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
        $this->bookings = [];
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

    public function generateInvoice($id)
    {
        $b = Booking::find($id);
        $invoice = new Invoice();
        $invoice->booking_id = $b->id;
        $invoice->amount_kes = $b->total_cost_kes;
        $invoice->created_by = auth()->user()->id;
        $invoice->save();

        $this->emit('done',[
            'success'=>'Successfully Generated the Invoice'
        ]);
    }

    public function render()
    {
        return view('livewire.admin.bookings.calendar');
    }
}
