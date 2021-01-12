<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetterSubscription;

class NewsLetterSubscriptionController extends Controller
{
    public function subscribers()
    {
        $subscribe = NewsLetterSubscription::all();
        return $subscribe;
    }
}
