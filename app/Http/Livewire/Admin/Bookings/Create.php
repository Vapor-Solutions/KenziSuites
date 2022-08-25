<?php

namespace App\Http\Livewire\Admin\Bookings;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Room;
use App\Models\RoomType;
use Dotenv\Validator;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Create extends Component
{
    public Booking $booking;
    public $rooms,$room_types,$clients, $type_id;

    protected $rules = [
        'type_id'=>'required',
        'booking.client_id'=>'required',
        'booking.room_id'=>'required',
        'booking.check_in'=>'required|date',
        'booking.check_out'=>'required|date',

    ];

    public function mount()
    {
        $this->booking = new Booking();
        $this->clients = Client::all();
        $this->rooms = Room::all();
        $this->room_types = RoomType::all();
    }

    public function save()
    {
        $this->validate();
        if ($this->booking->room->isBookedBetween($this->booking->check_in, $this->booking->check_out)) {
            throw ValidationException::withMessages([
                'booking.room_id'=>'The Room is already Booked During those Dates '
            ]);
        }
        $this->booking->created_by = auth()->user()->id;
        $this->booking->save();
        return redirect()->route('admin.bookings.index');
    }
    public function render()
    {
        return view('livewire.admin.bookings.create');
    }
}
