<?php

namespace App\Http\Livewire\Admin\Bookings;

use App\Models\Booking;
use Livewire\Component;

class Edit extends Component
{
    public Booking $booking;

    protected $rules = [
        'booking.client_id' => 'required',
        'booking.room_id' => 'required',
        'booking.check_in' => 'required|date',
        'booking.check_out' => 'required|date',
    ];

    public function mount($id)
    {
        $this->booking = Booking::find($id);
    }

    public function save()
    {
        $this->booking->updated_by = auth()->user()->id;
        $this->booking->save();
        return redirect()->route('admin.bookings.index');
    }
    public function render()
    {
        return view('livewire.admin.bookings.edit');
    }
}
