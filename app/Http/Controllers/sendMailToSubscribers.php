<?php

namespace App\Http\Controllers;

use App\Mail\sendMailToSubscribersMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class sendMailToSubscribers extends Controller
{
    public function sendMailToSubscribers()
    {
        $email = DB::table('news_letter_subscriptions')->select(['email']);
        foreach ($email as $emails) {
            Mail::to($emails)->send(new sendMailToSubscribersMail($email));
        }
    }
}
