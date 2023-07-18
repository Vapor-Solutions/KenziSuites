<div>
    <x-slot name="header">
        <h5>Testimonials</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Create a Client's Testimonial</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                            <label for="client_id" class="form-label">Client</label>
                            <select wire:model='testimonial.client_id' class="form-control" name="client_id"
                                id="client_id">
                                <option>SELECT YOUR CLIENT</option>
                                @foreach (App\Models\Client::all() as $client)
                                    <option value="{{ $client->id }}" @disabled($client->testimonial)>{{ $client->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('testimonial.client_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="rating" class="form-label">Rating</label>
                          <input type="number"
                            class="form-control" step="0.1" max="5" min="1" wire:model='testimonial.rating' name="rating" id="rating" aria-describedby="helpId" placeholder="Enter your Rating">
                          @error('testimonial.rating')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="testimonial" class="form-label">Testimonial</label>
                            <textarea wire:model='testimonial.testimonial' class="form-control" name="testimonial" id="testimonial" rows="3"></textarea>
                            @error('testimonial.testimonial')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>
                <button wire:click='save' class="btn btn-primary">
                    submit
                </button>
            </div>
        </div>
    </div>
</div>
