<div>
    <x-slot name="header">
        <h5>Content Editing</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card my-5">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit Intro Content 1</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_intro1">
                            {!! $intro_content1 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_intro1'>submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit Intro Content 2</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_intro2">
                            {!! $intro_content2 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_intro2'>submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit Intro Content 3</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_intro3">
                            {!! $intro_content3 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_intro3'>submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-5">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit Delivery Content 1</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_delivery1">
                            {!! $delivery_content1 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_delivery1'>submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit Delivery Content 2</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_delivery2">
                            {!! $delivery_content2 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_delivery2'>submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit Delivery Content 3</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_delivery3">
                            {!! $delivery_content3 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_delivery3'>submit</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="card my-5">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit About Content 1</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_about1">
                            {!! $about_content1 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_about1'>submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit About Content 2</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_about2">
                            {!! $about_content2 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_about2'>submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="card-header">
                        <h5>Edit About Content 3</h5>
                    </div>
                    <div class="card-body" wire:ignore>
                        <div id="editor_about3">
                            {!! $about_content3 !!}
                        </div>
                        <div class="mt-5">
                            <button class="btn btn-primary" wire:click='save_about3'>submit</button>
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

        // Intros
        ClassicEditor
            .create(document.querySelector('#editor_intro1'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('intro_content1', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor_intro2'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('intro_content2', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor_intro3'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('intro_content3', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        // Abouts
        ClassicEditor
            .create(document.querySelector('#editor_about1'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('about_content1', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor_about2'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('about_content2', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor_about3'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('about_content3', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        // Deliverys
        ClassicEditor
            .create(document.querySelector('#editor_delivery1'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('delivery_content1', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor_delivery2'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('delivery_content2', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#editor_delivery3'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('delivery_content3', editor.getData())
                })
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
