<div>
    <x-slot name="header">
        <h5>Room Types</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Room Types</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Room type</th>
                            <th>Number of Rooms</th>
                            <th>Price</th>
                            <th>Number of Bookings</th>
                            <th>Total Earned</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($room_types as $type)
                            <tr>
                                <td scope="row">{{ $type->id }}</td>
                                <td>{{ $type->title }}</td>
                                <td>{{ count($type->rooms) }}</td>
                                <td>KES {{ number_format($type->price_kes) }}</td>
                                @php
                                    $bookings = 0;

                                    foreach ($type->rooms as $room) {
                                        $bookings += count($room->bookings);
                                    }
                                @endphp
                                <td>{{ $bookings }}</td>

                                @php
                                    $costs = 0;
                                    foreach ($type->rooms as $room) {
                                        foreach ($room->bookings as $booking) {
                                            $costs += $booking->total_cost_kes;
                                        }
                                    }
                                @endphp
                                <td>KES {{ number_format($costs) }}</td>
                            </tr>
                        @endforeach

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <strong>TOTAL:</strong>
                            </td>
                            @php
                                $booking_earnings = 0;

                                foreach (App\Models\Booking::all() as $booking) {
                                    $booking_earnings += $booking->total_cost_kes;
                                }
                            @endphp
                            <td><strong>KES {{ number_format($booking_earnings) }}</strong></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
