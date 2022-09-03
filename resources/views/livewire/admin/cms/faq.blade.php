<div>
    <x-slot name="header">
        <h5>Frequently Asked Questions</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Questions and Answers in order</h5>
            </div>
            <div class="table-responsive card-body">
                @if (count($faqs) > 0)
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th scope="col">Question</th>
                                <th scope="col">Answer</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $question)
                                <tr>
                                    <td scope="row">{{ $question->id }}</td>
                                    <td>{{ $question->question }}</td>
                                    <td>{{ $question->answer }}</td>
                                    <td>
                                        <div class="d-flex flex-row">
                                            <div class="flex-col m-2">
                                                <a href="{{ route('admin.cms.faq.edit', $question->id) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                            </div>
                                            <div class="flex-col m-2">
                                                <button class="btn btn-danger" onclick="confirm('Are You Sure You want to delete this FAQ?')|| event.stopImmediatePropagation()" wire:click='delete({{ $question->id }})'><i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h2 class="text-center">No FAQs Set</h2>
                @endif
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.cms.faq.create') }}" class="btn btn-primary">Add FAQs</a>
            </div>

        </div>
    </div>
</div>


@push('scripts')
    <script>
        Livewire.on('done', (e)=>{
            Toast.fire({
                icon:'success',
                text:e.success

            })
            console.log(e)
        })
    </script>
@endpush
