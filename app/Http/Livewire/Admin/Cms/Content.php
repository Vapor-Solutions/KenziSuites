<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;

class Content extends Component
{
    public $intro_content1, $intro_content2, $intro_content3;

    public function mount()
    {
        $this->intro_content1 = file_get_contents('text/intro_content1.txt');
    }


    public function render()
    {
        return view('livewire.admin.cms.content');
    }
}
