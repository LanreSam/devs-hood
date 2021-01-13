<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSubscriptionMail;
use Illuminate\Http\Request;
use App\Models\NewsLetterSubscription;
use Illuminate\Support\Facades\Mail;

class NewsLetterSubscriptionController extends Controller
{
    public function subscribers()
    {
        $subscribers = NewsLetterSubscription::all();
        return $subscribers;
    }

    public function storeEmail(Request $request)
    {
        $validatedata = $request->validate([
            'email' => 'required|unique:news_letter_subscriptions'
        ]);

        $subscriber = new NewsLetterSubscription();
        $subscriber->email = $request->email;
        $subscriber->save();
        
        $msg = "Thanks for subscribing to our NewsLetter";
        Mail::to('ezechelanre@gmail.com')->send(new NewsletterSubscriptionMail($msg));
        return back()->with('subscribe-msg', 'You have successfully subscribed to DevsHood NewsLetter!');
    }
}
