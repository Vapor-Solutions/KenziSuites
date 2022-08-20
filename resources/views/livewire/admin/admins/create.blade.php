<div>

    <x-slot name="header">
        <h5>Create a new Administrator</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>
                    New Admin
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" wire:model="admin.name" name="name" id="name" class="form-control" placeholder="Enter Administrators's Full Name" aria-describedby="name">
                  <small id="name" class="text-muted">Enter Administrator's Full Name</small><br>
                  @error('admin.name')
                      <small id="name" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input wire:model="admin.email" type="email" name="email" id="email" class="form-control" placeholder="Enter Administrators's Email Address" aria-describedby="name">
                  <small id="email" class="text-muted">Enter Administrator's Email Address</small><br>
                  @error('admin.email')
                      <small id="email" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Type of Administrator</label>
                  <select class="form-control" wire:model='type' name="" id="">
                    <option selected> Select the Type of Administrator</option>
                    @foreach ($admin_types as $type)
                        <option value="{{ $type->id }}">{{ $type->title }}</option>
                    @endforeach
                  </select>
                  @error('type')
                      <small id="type" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <button wire:click='save' class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
