<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\DashboardController;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class Dashboard extends Component
{

    protected $listeners = [
        'done'=>'render'
    ];
    public $days;

    public function mount()
    {
        $this->days = CarbonPeriod::create(Carbon::now()->subMonths(2), 'now')->toArray();
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


    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
