<?php

namespace App\Http\Livewire\Admin\Employees;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $employees = [];


    public function mount()
    {
        $users = User::all();

        foreach ($users as $user) {
            if ($user && $user->is_employee) {
                array_push($this->employees, $user);
            }
        }
    }


    public function render()
    {
        return view('livewire.admin.employees.index');
    }
}
