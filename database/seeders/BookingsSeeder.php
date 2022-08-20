<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000; $i++) {
            $booking = new Booking();
            $booking->room_id = random_int(1, count(Room::all()));

            $booking->client_id = random_int(1, count(Client::all()));
            $random = random_int(1, 400);
            $booking->check_in = Carbon::now()->subDays($random);
            $booking->check_out = Carbon::parse($booking->check_in)->addDays(random_int(1, $random));
            $booking->created_by = 1;
            if ($booking->room->isBooked($booking->check_in) || $booking->room->isBooked($booking->check_out)) {
                continue;
            } else {
                $booking->save();
            }
        }
    }
}
