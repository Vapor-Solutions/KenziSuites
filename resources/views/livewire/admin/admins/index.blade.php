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
                                        {{ $role->title }}{{ $admin->roles->last()->id == $role->id ? '':','}}
                                    @endforeach
                                </td>
                                <td>{{ $admin->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
