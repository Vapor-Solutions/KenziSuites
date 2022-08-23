<div>

    <x-slot name="header">
        <h5>Clients</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>
                    Edit Client's Details
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" wire:model="client.name" name="name" id="name" class="form-control" placeholder="Enter Client's Full Name" aria-describedby="name">
                  <small id="name" class="text-muted">Enter Client's Full Name</small><br>
                  @error('client.name')
                      <small id="name" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input wire:model="client.email" type="email" name="email" id="email" class="form-control" placeholder="Enter Client's Email Address" aria-describedby="name">
                  <small id="email" class="text-muted">Enter Client's Email Address</small><br>
                  @error('client.email')
                      <small id="email" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="phone_number" class="form-label">Phone Number</label>
                  <input wire:model="client.phone_number" type="text" name="phone_number" id="" class="form-control" placeholder="Enter Client's Phone Number" aria-describedby="name">
                  <small id="phone_number" class="text-muted">Enter Client's Phone Number</small><br>
                  @error('client.phone_number')
                      <small id="phone_number" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                    <label for="address1" class="form-label">Address 1</label>
                    <textarea wire:model='client.address1' class="form-control" name="address1" id="address1" rows="3"></textarea>
                    @error('client.address1')
                    <small id="address1" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address2" class="form-label">Address 2</label>
                    <textarea wire:model='client.address2' class="form-control" name="address2" id="address2" rows="3"></textarea>
                    @error('client.address2')
                    <small id="address2" class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="city" class="form-label">City</label>
                  <input wire:model="client.city" type="text" name="city" id="" class="form-control" placeholder="Enter Client's Phone Number" aria-describedby="name">
                  <small id="city" class="text-muted">Enter Client's Residing City/County</small><br>
                  @error('client.city')
                      <small id="city" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="country" class="form-label">Country</label>
                  <input wire:model="client.country" type="text" name="country" id="" class="form-control" placeholder="Enter Client's Phone Number" aria-describedby="name">
                  <small id="country" class="text-muted">Enter Client's Residing Country</small><br>
                  @error('client.country')
                      <small id="country" class="text-danger">{{ $message }}</small>
                  @enderror
                </div>



                <button wire:click='save' class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
