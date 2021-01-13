<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required|min:3|max:12',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('ezechelanre@gmail.com')->send(new ContactMail($details));
        return back()->with('mail-msg', "Mail sent successfully. We will reply you shortly.");
    }
}
