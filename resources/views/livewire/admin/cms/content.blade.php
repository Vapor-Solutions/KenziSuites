<div>
    <x-slot name="header">
        <h5>Content Editing</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit Intro Content 1</h5>
                    </div>
                    <div class="card-body" >
                        <textarea name="intro_content1" id="editor" cols="30" rows="10" />{{  $intro_content1 }}</textarea>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_intro1'>submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor=>{
                editor.model.document.on('change:data', ()=>{
                    @this.set('intro_content1', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
