<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checkout\CheckoutController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/total-heat-pro/checkout', [CheckoutController::class, 'index']);

Route::post('/checkout-frm-submit', [CheckoutController::class, 'store'])->name('checkout-frm-submit');
