<?php

namespace App\Http\Livewire\Admin\Employees;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public User $employee;

    protected $rules = [
        'employee.name' => 'required',
        'employee.email' => 'required',
    ];

    public function mount()
    {
        $this->employee = new User();
    }

    public function save()
    {
        $this->employee->save();
        $this->employee->roles()->attach(3);

        return redirect()->route('admin.employees.index');
    }
    public function render()
    {
        return view('livewire.admin.employees.create');
    }
}
