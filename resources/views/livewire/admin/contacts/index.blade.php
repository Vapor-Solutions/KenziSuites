<div>
    <x-slot name="header">
        <h5>Contacts</h5>
    </x-slot>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Contacts</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Details</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td scope="row">{{ $contact->id }}</td>
                                <td>
                                    <div class="row">
                                        <div style="font-weight: 700" class="col-12">
                                            {{ $contact->name }}
                                        </div>
                                        <div class="col-12">
                                            {{ $contact->email }}
                                        </div>
                                        <div class="col-12">
                                            {{ $contact->phone }}
                                        </div>
                                    </div>
                                </td>
                                <td class="w-50">
                                    {{ $contact->message }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
