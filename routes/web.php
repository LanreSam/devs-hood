<?php

use App\Http\Controllers\ContactController;
use App\Http\Livewire\IndexComponent;
use App\Http\Controllers\NewsLetterSubscriptionController;
use App\Http\Controllers\sendMailToSubscribers;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (App::environment('production')) {
    URL::forceScheme('https');
}


Route::get('/', IndexComponent::class);

Route::get('/subscribers', [NewsLetterSubscriptionController::class, 'subscribers']);

Route::post('/store-email', [NewsLetterSubscriptionController::class, 'storeEmail'])->name('store.email');

Route::post('/send-email', [ContactController::class, 'sendMail'])->name('send.email');

//route for sending mails to all subscribers
Route::get('/mail-render', [sendMailToSubscribers::class, 'render']);
Route::post('/mail-sub', [sendMailToSubscribers::class, 'sendMailToSubscribers'])->name('send.subscribers');

