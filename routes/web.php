<?php

use App\Http\Livewire\IndexComponent;
use App\Http\Controllers\NewsLetterSubscriptionController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', IndexComponent::class);

Route::get('/subscribers', [NewsLetterSubscriptionController::class, 'subscribers']);

Route::post('/store-email', [NewsLetterSubscriptionController::class, 'storeEmail'])->name('store.email');
