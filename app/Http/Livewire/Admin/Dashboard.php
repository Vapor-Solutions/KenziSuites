<?php

namespace App\Http\Livewire\Admin;

use App\Http\Controllers\DashboardController;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Livewire\Component;

class Dashboard extends Component
{

    protected $listeners = [
        'done' => 'render'
    ];
    public $days, $today;

    public function mount()
    {
        $this->today = Carbon::now();
        $this->days = CarbonPeriod::create($this->today->subMonths(2), 'now')->toArray();
    }
    public function last_month()
    {
        $this->today->subMonth();
        $this->days = CarbonPeriod::create($this->today->subMonths(2), $this->today)->toArray();
        $this->emit('done');
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
