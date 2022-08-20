<?php

namespace App\Http\Livewire\Admin\Admins;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Edit extends Component
{
    public User $admin;
    public $admin_types;
    public $type;

    protected $rules = [
        'admin.name' => 'required',
        'admin.email' => 'required',
    ];


    public function mount($id)
    {
        $this->admin = User::find($id);
        $this->admin_types = Role::whereIn('id', [1, 2])->get();
        $this->type = $this->admin->roles[0]->id;
    }

    public function save()
    {
        $this->admin->password = Hash::make('1234567890');
        $this->admin->save();
        $this->admin->roles()->update(['role_id' => $this->type]);

        return redirect()->route('admin.admins.index');
    }
    public function render()
    {
        return view('livewire.admin.admins.edit');
    }
}
