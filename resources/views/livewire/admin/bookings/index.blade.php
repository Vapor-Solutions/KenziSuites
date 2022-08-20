<div>
    <x-slot name="header">
        <h5>
            Bookings
        </h5>
    </x-slot>

    <div class="container-fluid my-2">
        <div class="card">
            <div class="card-header">
                <h5>List of recent Bookings</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Room</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Nights Spent</th>
                            <th>Total Cost</th>
                            <th>Created By</th>
                            <th>Created On</th>
                            <th>Last Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td scope="row">{{ $booking->id }}</td>
                                <td>{{ $booking->client->name }}</td>
                                <td>{{ $booking->room->room_number }}</td>
                                <td>{{ Carbon\Carbon::parse($booking->check_in)->format('jS M, Y') }}</td>
                                <td>{{ Carbon\Carbon::parse($booking->check_out)->format('jS M, Y') ?? '-' }}</td>
                                <td>{{ $booking->nights_stayed }}</td>
                                <td>{{ 'KES '.number_format($booking->total_cost_kes)}}</td>
                                <td>{{ $booking->creator->name }}</td>
                                <td>{{ Carbon\Carbon::parse($booking->created_at)->format('jS M, Y - h:i:sA') ?? '-' }}</td>
                                <td>{{ Carbon\Carbon::parse($booking->updated_at)->format('jS M, Y - h:i:sA') ?? Carbon\Carbon::parse($booking->created_at)->format('jS M, Y - h:i:sA') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>
