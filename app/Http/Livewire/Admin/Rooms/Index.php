<?php

namespace App\Http\Livewire\Admin\Rooms;

use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'done'=>'render'
    ];

    protected $paginationTheme = 'bootstrap';

    public function delete($id)
    {
        $room = Room::find($id);
        $room->delete();

        $this->emit('done');
    }

    public function render()
    {


        return view('livewire.admin.rooms.index', [
            'rooms' => Room::paginate(5)
        ]);
    }
}
