<?php

namespace App\Http\Livewire\Admin\Cms;

use Livewire\Component;

class Content extends Component
{
    public $intro_content1, $intro_content2, $intro_content3;
    public $about_content1, $about_content2, $about_content3;
    public $delivery_content1, $delivery_content2, $delivery_content3;
    public $footer_content;

    protected $listeners = [
        'done' => 'render'
    ];

    public function mount()
    {
        $this->intro_content1 = file_get_contents('text/intro_content1.txt');
        $this->intro_content2 = file_get_contents('text/intro_content2.txt');
        $this->intro_content3 = file_get_contents('text/intro_content3.txt');
        $this->about_content1 = file_get_contents('text/about_content1.txt');
        $this->about_content2 = file_get_contents('text/about_content2.txt');
        $this->about_content3 = file_get_contents('text/about_content3.txt');
        $this->delivery_content1 = file_get_contents('text/delivery_content1.txt');
        $this->delivery_content2 = file_get_contents('text/delivery_content2.txt');
        $this->delivery_content3 = file_get_contents('text/delivery_content3.txt');
        $this->footer_content = file_get_contents('text/footer_content.txt');
    }

    public function save_about1()
    {
        file_put_contents('text/about_content1.txt', $this->about_content1);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated About Content 2');
    }
    public function save_about2()
    {
        file_put_contents('text/about_content2.txt', $this->about_content2);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated About Content 2');
    }
    public function save_about3()
    {
        file_put_contents('text/about_content3.txt', $this->about_content3);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated About Content 3');
    }
    public function save_intro1()
    {
        file_put_contents('text/intro_content1.txt', $this->intro_content1);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated Intro Content 2');
    }
    public function save_intro2()
    {
        file_put_contents('text/intro_content2.txt', $this->intro_content2);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated Intro Content 2');
    }
    public function save_intro3()
    {
        file_put_contents('text/intro_content3.txt', $this->intro_content3);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated Intro Content 3');
    }
    public function save_delivery1()
    {
        file_put_contents('text/delivery_content1.txt', $this->delivery_content1);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated Delivery Content 2');
    }
    public function save_delivery2()
    {
        file_put_contents('text/delivery_content2.txt', $this->delivery_content2);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated Delivery Content 2');
    }
    public function save_delivery3()
    {
        file_put_contents('text/delivery_content3.txt', $this->delivery_content3);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated Delivery Content 3');
    }
    public function save_footer()
    {
        file_put_contents('text/footer_content.txt', $this->footer_content);

        $this->emit('done');
        session()->flash('success', 'Successfully Updated Footer Content');
    }


    public function render()
    {
        return view('livewire.admin.cms.content');
    }
}
