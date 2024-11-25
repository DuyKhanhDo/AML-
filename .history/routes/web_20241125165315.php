<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\PayPalController;

Auth::routes();

Route::get('/', function () {
    return view('catalogue');
});

//Auth routes
Route::get('/login', [LogInController::class, 'LogInView'])->name('login');
Route::post('/submit-login', [LogInController::class, 'Submit'])->name('submit.login');

Route::get('/register', [RegisterController::class, 'RegisterView'])->name('register');
Route::post('/submit-register', [RegisterController::class, 'Submit'])->name('submit.register');

Route::post('/logout', function(){
    Auth::logout();
    return redirect()->back();
})->name('logout');

//Subscription routes
Route::get('/subscribe', [SubscriptionController::class, 'SubscribeView'])->name('subscribe');

Route::get('auth/paypal/redirect', [PayPalController::class, 'redirectToProvider']);
