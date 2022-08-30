<?php

namespace App\Http\Controllers;

use App\Models\BookingRequest;
use Illuminate\Http\Request;

class BookingRequestsController extends Controller
{
    public function book(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'check_in' => 'required',
            'check_out' => 'required',
            'pax' => 'required',
        ]);

        $booking = new BookingRequest();

        // dd($request);


        $booking->email = $request->email;
        $booking->check_in = $request->check_in;
        $booking->check_out = $request->check_out;
        $booking->pax = $request->pax;
        $booking->save();

        return redirect()->route('home')->with('success', "Thank you very much for choosing Kenzi Suites! We have received your booking request. Someone will be in contact with you soon!");

    }
}
