<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class PayPalController extends Controller
{
    public function redirectToProvider(){
        return Socialite::driver('paypal')->redirect();
    }

    public function handleCallback
}
