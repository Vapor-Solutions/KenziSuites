<div>
    <x-slot name="header">
        <h5>Employees</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Employees</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $employee)
                            <tr>
                                <td scope="row">{{ $employee->id }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->email }}</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="flex-col">
                                            <a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-secondary"><span class="i fa fa-edit"></span></a>
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
