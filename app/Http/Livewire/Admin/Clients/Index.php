<?php

namespace App\Http\Livewire\Admin\Clients;

use App\Models\Client;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    protected $listeners = [
        'done' => 'render'
    ];
    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
        if (count(Client::find($id)->bookings) == 0) {
            Client::find($id)->delete();
            $this->emit('done');
        }else {
            throw ValidationException::withMessages([
                'message'=>'This Client has Bookings attached to him/her'
            ]);
        }

    }

    public function render()
    {
        return view('livewire.admin.clients.index', [
            'clients' => Client::orderBy('id', 'desc')->paginate(15)
        ]);
    }
}
