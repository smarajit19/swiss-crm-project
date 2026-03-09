<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\ThankYou\ThankYouController;
use App\Http\Controllers\Upsell\Upsell1aController;
use App\Http\Controllers\Upsell\Upsell2Controller;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/total-heat-pro/offer/1/checkout-now-v3', [CheckoutController::class, 'index']);

Route::post('/checkout-frm-submit', [CheckoutController::class, 'store'])->name('checkout-frm-submit');

Route::get('/total-heat-pro/offer/1/upsell1a', [Upsell1aController::class, 'index']);
Route::post('/upsell1a/store', [Upsell1aController::class, 'store'])->name('upsell1a.store');

Route::get('/total-heat-pro/offer/1/upsell2', [Upsell2Controller::class, 'index']);
Route::post('/upsell2/store', [Upsell2Controller::class, 'store'])->name('upsell2.store');
Route::get('/total-heat-pro/offer/1/thank-you', [ThankYouController::class, 'index'])->name('thank-you');
