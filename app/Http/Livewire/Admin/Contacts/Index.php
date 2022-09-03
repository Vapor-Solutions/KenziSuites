<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public function render()
    {
        return view('livewire.admin.contacts.index', [
            'contacts'=>Contact::paginate(10),
        ]);
    }
}
