<?php

namespace App\Http\Livewire\Admin\Invoices;

use App\Models\Invoice;
use Livewire\Component;

class View extends Component
{
    public Invoice $invoice;
    public $title = 'Invoice';

    public function mount($id)
    {
        $this->invoice = Invoice::find($id);
    }
    public function render()
    {
        return view('livewire.admin.invoices.view',)
            ->layout('layouts.docs', [
                'title' => $this->title,
                'document' => $this->title,
                'doc_no' => $this->invoice->id,
                'date' => $this->invoice->created_at,
                'client_name'=>$this->invoice->booking->client->name,
                'client_phone'=>$this->invoice->booking->client->phone_number,
                'client_address'=>$this->invoice->booking->client->address,
                'client_city'=>$this->invoice->booking->client->city,
                'client_country'=>$this->invoice->booking->client->country,
                'amount'=>$this->invoice->amount_kes,
                'booking'=>$this->invoice->booking
            ]);
    }
}
