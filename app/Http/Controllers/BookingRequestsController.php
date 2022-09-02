<?php

namespace App\Http\Controllers;

use App\Models\BookingRequest;
use Carbon\Carbon;
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
        $booking->check_in = Carbon::parse($request->check_in)->toDateString();
        $booking->check_out = Carbon::parse($request->check_out)->toDateString();
        $booking->pax = $request->pax;
        $booking->save();

        return response()->json([
                'success'=>"Thank you very much for choosing Kenzi Suites! We have received your booking request. Someone will be in contact with you soon!"
        ]);

    }
}
