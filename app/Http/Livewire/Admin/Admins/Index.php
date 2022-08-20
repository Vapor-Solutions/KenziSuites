<?php

namespace App\Http\Livewire\Admin\Admins;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $admins = [];

    protected $listeners = [
        'done' => 'mount'
    ];
    public function mount()
    {
        $users = User::all();

        foreach ($users as $user) {
            if ($user && $user->is_admin) {
                array_push($this->admins, $user);
            }
        }
    }

    public function delete($id)
    {
        if (auth()->user()->id == $id) {
            abort(403, 'You can\'t Delete yourself while logged in');
        }
        if ($id == 1) {
            abort(403, 'This User cannot be deleted');
        }
        User::find($id)->delete();

        session()->$this->emit('done');
    }
    public function render()
    {
        return view('livewire.admin.admins.index');
    }
}
