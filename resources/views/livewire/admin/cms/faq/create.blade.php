<div>
    <x-slot name="header">
        <h5>Frequently Asked Questions</h5>
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Create FAQ</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                  <label for="question" class="form-label">Question</label>
                  <input type="text"
                    class="form-control" name="question" wire:model="faq.question" id="question" aria-describedby="helpId" placeholder="Input the Question">
                  @error('faq.question')
                      <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="answer" class="form-label">Answer</label>
                  <textarea class="form-control" name="answer" id="answer" wire:model="faq.answer" rows="3"></textarea>
                  @error('faq.answer')
                      <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                  @enderror
                </div>

                <button wire:click="save" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
