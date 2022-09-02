<?php

namespace App\Http\Livewire\Admin\Cms;

use App\Models\Question;
use Livewire\Component;

class Faq extends Component
{
    public function render()
    {
        return view('livewire.admin.cms.faq', [
            'faqs'=>Question::all()
        ]);
    }
}
