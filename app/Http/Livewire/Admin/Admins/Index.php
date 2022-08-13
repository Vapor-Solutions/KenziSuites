<?php

namespace App\Http\Livewire\Admin\Admins;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $admins = [];


    public function mount()
    {
        $users = User::all();

        foreach ($users as $user) {
            if ($user && $user->is_admin) {
                array_push($this->admins, $user);
            }
        }
    }
    public function render()
    {
        return view('livewire.admin.admins.index');
    }
}
