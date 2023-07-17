<?php

namespace App\Jobs;

use App\Mail\ContactEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class ContactDetailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $email;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Mailable $email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        info("handle");
        Mail::to(env('DEFAULT_EMAIL', 'info@kenzisuites.com'))->send(new ContactEmail($this->email));
        // Mail::to(env('DEFAULT_EMAIL', 'info@kenzisuites.com'))->queue($this->email);
    }
}
