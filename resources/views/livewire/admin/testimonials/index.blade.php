<div>
    <x-slot name="header">
        <h5>Testimonials</h5>
    </x-slot>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>List of Clients' Testimonials</h5>

                <div class="ms-auto">
                    <a href="{{ route('admin.testimonials.create') }}" data-bs-toggle="popover" title="Add a new Testimonial" data-bs-content="Popup content"
                        class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> Client's Name</th>
                            <th>
                                Testimonial
                            </th>
                            <th>Rating (out of 5 stars) </th>
                            <th>Date Created</th>
                            <th>Authorized By</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>{{ $testimonial->id }}</td>
                                <td>{{ $testimonial->client->name }}</td>
                                <td>{{ $testimonial->testimonial }}</td>
                                <td>{{ $testimonial->rating }} Stars</td>
                                <td>{{ $testimonial->created_at }}</td>
                                <td>{{ $testimonial->creator->name }}</td>
                                <td>
                                    <div class="d-flex flex-row justify-content-center">
                                        <div class="flex-col">
                                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}"
                                                class="btn btn-secondary"><i class="fa fa-edit"></i></a>
                                        </div>
                                        <div class="flex-col">
                                            <button class="btn btn-danger"
                                                onclick="confirm('Are you sure you want to delete this testimonial?')||event.stopImmediatePropagation()"
                                                wire:click='delete({{ $testimonial->id }})'><i
                                                    class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        {{ $testimonials->links() }}
                    </tfoot>
                </table>

            </div>
            <div class="card-footer">
                {{ $testimonials->links() }}
            </div>
        </div>
    </div>
</div>
