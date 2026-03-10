<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\ThankYou\ThankYouController;
use App\Http\Controllers\Upsell\Upsell1aController;
use App\Http\Controllers\Upsell\Upsell2Controller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/checkout-now-v3', [CheckoutController::class, 'index']);

Route::get('/upsell1a', [Upsell1aController::class, 'index']);

Route::get('/upsell2', [Upsell2Controller::class, 'index']);

Route::get('/thank-you', [ThankYouController::class, 'index'])->name('thank-you');
