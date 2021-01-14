<?php

namespace App\Http\Controllers;

use App\Mail\sendMailToSubscribersMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class sendMailToSubscribers extends Controller
{
    public function render()
    {
        return view('mailtosubscribers');
    }

    public function sendMailToSubscribers()
    {
        //gets all the emails in the newsletter subscription table
        $email = DB::table('news_letter_subscriptions')->get('email');
        //sends an email to all the emails in the table
        foreach ($email as $emails) {
            Mail::to($emails)->send(new sendMailToSubscribersMail($email));
        }
        return "mail sent successfully to all subscribers";
    }
}
