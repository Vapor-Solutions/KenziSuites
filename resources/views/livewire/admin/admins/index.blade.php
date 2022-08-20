<div>
    <x-slot name="header">
        <h5>Administrators' List</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Administrators</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Admin Type</th>
                            <th>Date Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td scope="row">{{ $admin->id }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    @foreach ($admin->roles as $role)
                                        {{ $role->title }}{{ $admin->roles->last()->id == $role->id ? '' : ',' }}
                                    @endforeach
                                </td>
                                <td>{{ $admin->created_at }}</td>
                                <td>
                                    <div class="d-flex flex-row">
                                        <div class="flex-col m-2">
                                            <a href="{{ route('admin.admins.edit', $admin->id) }}"
                                                class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        @if ($admin->id != 1)
                                            <div class="flex-col m-2">
                                                <button class="btn btn-danger"
                                                    onclick="confirm('Are you sure you want to delete this Administrator?')||event.stopImmediatePropagation()"
                                                    wire:click='delete({{ $admin->id }})'><i
                                                        class="fa fa-trash"></i></button>
                                            </div>
                                        @endif
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
