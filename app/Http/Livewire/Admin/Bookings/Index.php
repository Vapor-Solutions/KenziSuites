<?php

namespace App\Http\Livewire\Admin\Bookings;

use App\Models\Booking;
use Livewire\Component;

class Index extends Component
{
    public $bookings;

    public function mount()
    {
        $this->bookings = Booking::all();
    }
    public function render()
    {
        return view('livewire.admin.bookings.index');
    }
}
