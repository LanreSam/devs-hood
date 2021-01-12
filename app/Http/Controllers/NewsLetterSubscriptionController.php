<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetterSubscription;

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

        return back()->with('subscribe-msg', 'You have successfully subscribed to DevsHood NewsLetter!');
    }
}
