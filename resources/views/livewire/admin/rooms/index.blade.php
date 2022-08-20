<div>
    <x-slot name="header">
        <h5>Suites</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Suites</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Room Number</th>
                            <th>Room Type</th>
                            <th>Availability</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <td scope="row">{{ $room->id }}</td>
                                <td>{{ $room->room_number }}</td>
                                <td>{{ $room->roomType->title }}</td>
                                <td><span
                                        class="badge rounded-pill bg-{{ $room->isBooked(Carbon\Carbon::now()->toDateString()) ? 'danger' : 'success' }}">{{ $room->isBooked(Carbon\Carbon::now()->toDateString()) ? 'Not Available' : 'Available' }}</span>
                                </td>
                                <td>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="flex-col m-2">
                                            <a href="{{ route('admin.rooms.edit', $room->id) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="flex-col m-2">
                                            <button class="btn btn-danger"
                                                    onclick="confirm('Are you sure you want to delete this Administrator?')||event.stopImmediatePropagation()"
                                                    wire:click='delete({{ $room->id }})'><i
                                                        class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $rooms->links() }}
                    </tfoot>
                </table>

            </div>
            <div class="card-footer">
                {{ $rooms->links() }}
            </div>
        </div>
    </div>
</div>
