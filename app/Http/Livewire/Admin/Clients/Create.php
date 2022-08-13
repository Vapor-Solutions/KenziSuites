<?php

namespace App\Http\Livewire\Admin\Clients;

use App\Models\Client;
use Livewire\Component;

class Create extends Component
{
    public Client $client;

    protected $rules = [
        'client.name'=>'required',
        'client.email'=>'required',
        'client.phone_number'=>'required',
        'client.address1'=>'required',
        'client.address2'=>'nullable',
        'client.city'=>'required',
        'client.country'=>'required',
    ];

    public function mount()
    {
        $this->client = new Client();
    }

    public function save()
    {
        $this->client->save();
    }
    public function render()
    {
        return view('livewire.admin.clients.create');
    }
}
