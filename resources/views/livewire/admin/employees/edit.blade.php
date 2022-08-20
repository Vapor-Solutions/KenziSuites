<div>
    <x-slot name="header">
        <h5>Edit Employee ({{ $employee->name }})</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Edit {{ $employee->name }}'s Details</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" wire:model='employee.name'
                        aria-describedby="name" placeholder="Enter your name">
                    <small id="name" class="form-text text-muted">Enter the Name of Your Employee</small><br>

                    @error('employee.name')
                        <small id="name" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="email" id="email" wire:model='employee.email'
                        aria-describedby="name" placeholder="Enter your email">
                    <small id="email" class="form-text text-muted">Enter the email of Your Employee</small><br>

                    @error('employee.email')
                        <small id="email" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button class="btn btn-primary" wire:click='save'>Save</button>
                <a href="{{ route('admin.employees.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>
