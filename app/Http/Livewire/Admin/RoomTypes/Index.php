<?php

namespace App\Http\Livewire\Admin\RoomTypes;

use App\Models\RoomType;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.room-types.index', [
            'room_types'=>RoomType::all()
        ]);
    }
}
