<?php

namespace App\Http\Controllers;

use App\Jobs\ContactDetailsJob;
use App\Mail\ContactEmail;
use App\Mail\SendContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use stdClass;

class ContactsController extends Controller
{
    public function submit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'body' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->body;

        $this->sendMail($contact);
        // info($contact);
        $contact->save();

        return response()->json([
            'success' => 'Successfully Submitted Your Request. We will contact you shortly'
        ]);
    }

    public function sendMail($contact)
    {
        $emailData = [
            'name' => $contact->name,
            'email' => $contact->email,
            'phone' => $contact->phone,
            'body' => $contact->message,
        ];

        info($emailData);
        // Mail::to(env('DEFAULT_EMAIL', 'info@kenzisuites.com'))->send(new ContactEmail($emailData));
        Mail::to(env('DEFAULT_EMAIL', 'info@kenzisuites.com'))->send(new SendContactEmail($emailData));
        // ContactDetailsJob::dispatch(new ContactEmail($emailData));

        // ContactDetailsJob::dispatch(new ContactEmail([
        //     'name' => $contact->name,
        //     'email' => $contact->email,
        //     'phone' => $contact->phone,
        //     'body' => $contact->message,
        // ]));
        // ContactDetailsJob::dispatch(new ContactEmail($emailData));
    }
}
