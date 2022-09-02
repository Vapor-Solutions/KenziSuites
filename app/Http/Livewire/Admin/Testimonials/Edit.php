<?php

namespace App\Http\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;

class Edit extends Component
{
    public Testimonial $testimonial;

    protected $rules = [
        'testimonial.client_id' => 'required',
        'testimonial.testimonial' => 'required',
        'testimonial.rating' => 'required',
    ];
    public function mount($id)
    {
        $this->testimonial = Testimonial::find($id);
    }

    public function save()
    {
        $this->validate();
        $this->testimonial->created_by = auth()->user()->id;
        $this->testimonial->save();

        return redirect()->route('admin.testimonials.index');
    }
    public function render()
    {
        return view('livewire.admin.testimonials.edit');
    }
}
