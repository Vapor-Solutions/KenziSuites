<?php

namespace App\Http\Livewire\Admin\Cms\Faq;

use App\Models\Question;
use Livewire\Component;

class Edit extends Component
{
    public $faq;

    protected $rules = [
        'faq.question' => 'required',
        'faq.answer' => 'required',
    ];

    public function mount($id)
    {
        $this->faq = Question::find($id);
    }

    public function save()
    {
        $this->validate();
        $this->faq->save();

        return redirect()->route('admin.cms.faq');
    }
    public function render()
    {
        return view('livewire.admin.cms.faq.edit');
    }
}
