<?php

namespace App\Http\Livewire\Admin\Admins;

use App\Models\Role;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $admin;
    public $admin_types;
    public int $type;

    protected $rules = [
        'admin.name' => 'required',
        'admin.email' => 'required',
    ];

    public function mount()
    {
        $this->admin = new User();
        $this->admin_types = Role::whereIn('id', [1,2])->get();
    }

    public function save()
    {
        $this->admin->save();
        $this->admin->roles()->attach($this->type);

        return redirect()->route('admin.admins.index');
    }
    public function render()
    {
        return view('livewire.admin.admins.create');
    }
}
