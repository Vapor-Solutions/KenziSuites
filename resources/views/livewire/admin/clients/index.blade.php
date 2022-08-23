<div>
    <x-slot name="header">
        <h5>Clients</h5>
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of clients</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Bookings</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->phone_number }}</td>
                                <td>{{ $client->address1 }} <br> {{ $client->address2 ?? '' }} </td>
                                <td>{{ $client->city }}</td>
                                <td>{{ $client->country }}</td>
                                <td>{{ count($client->bookings) }}</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="flex-col m-2">
                                            <a href="{{ route('admin.clients.edit', $client->id) }}"
                                                class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="flex-col m-2">
                                            <button class="btn btn-danger"
                                                onclick="confirm('Are you sure you want to delete this Client?')||event.stopImmediatePropagation()"
                                                wire:click='delete({{ $client->id }})'><i
                                                    class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
