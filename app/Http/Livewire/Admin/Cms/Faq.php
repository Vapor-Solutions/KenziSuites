<?php

namespace App\Http\Livewire\Admin\Cms;

use App\Models\Question;
use Livewire\Component;

class Faq extends Component
{
    protected $listeners = [
        'done'=>'render'
    ];

    public function delete($id)
    {
        Question::find($id)->delete();
        $this->emit('done',[
            'success'=>'Successfully Deleted the FAQ'
        ]);
    }
    public function render()
    {
        return view('livewire.admin.cms.faq', [
            'faqs'=>Question::all()
        ]);
    }
}
