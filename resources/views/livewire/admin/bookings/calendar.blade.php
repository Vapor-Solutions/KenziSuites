<div>
    <x-slot name="header">
        <h5>Booking Calendar</h5>
    </x-slot>
    <div class="container-fluid m-5">
        <div class="card my-2">
            <div class="card-header">
                <h5>Active Bookings</h5>
                <div class="d-flex flex-row justify-content-center">
                    <div class="flex-col mx-5">
                        <button wire:click='previousDay' class="btn btn-primary"><i class="fa fa-arrow-left"></i></button>
                    </div>
                    <div class="flex-col mx-5">
                        <strong style="font-size: 20px">{{ $active_date->format('jS \of F, Y') }}</strong>
                    </div>
                    <div class="flex-col mx-5">
                        <button  wire:click='nextDay' class="btn btn-primary"><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover" wire:loading.class='disabled'>
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Room Number</th>
                            <th>Check In Date</th>
                            <th>Check Out Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td scope="row">
                                    <strong>{{ $booking->client->name }}</strong><br>
                                    <small>{{ $booking->client->email }}</small>
                                </td>
                                <td>
                                    <strong>{{ $booking->room->room_number }}</strong><br>
                                    <small>{{ $booking->room->roomType->title }}</small>
                                </td>
                                <td>
                                    {{ Carbon\Carbon::parse($booking->check_in)->format('jS \of F,Y') }}
                                </td>
                                <td>
                                    {{ Carbon\Carbon::parse($booking->check_out)->format('jS \of F,Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Check Ins</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover " wire:loading.class='disabled'>
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Room Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\Booking::where('check_in', $active_date->toDateString())->get() as $booking)
                                    <tr>
                                        <td scope="row">
                                            <strong>{{ $booking->client->name }}</strong><br>
                                            <small>{{ $booking->client->email }}</small>
                                        </td>
                                        <td>
                                            <strong>{{ $booking->room->room_number }}</strong><br>
                                            <small>{{ $booking->room->roomType->title }}</small>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Check Outs</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" wire:loading.class='disabled'>
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Room Number</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach (App\Models\Booking::where('check_out', $active_date->toDateString())->get() as $booking)
                                    <tr>
                                        <td scope="row">
                                            <strong>{{ $booking->client->name }}</strong><br>
                                            <small>{{ $booking->client->email }}</small>
                                        </td>
                                        <td>
                                            <strong>{{ $booking->room->room_number }}</strong><br>
                                            <small>{{ $booking->room->roomType->title }}</small>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
