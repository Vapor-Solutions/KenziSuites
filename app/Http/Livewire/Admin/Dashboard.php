<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\DashboardController;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
    public function maintenance_switch()
    {
        if (env('MAINTENANCE_MODE')) {
            DashboardController::maintenance_false();
        } else {
            DashboardController::maintenance_true();
        }

        $this->emit('done');
    }
}
