<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\Upsell\Upsell1aController;
use App\Http\Controllers\Upsell\Upsell2Controller;

Route::post('/checkout-frm-submit', [CheckoutController::class, 'store'])->name('checkout-frm-submit');

Route::post('/upsell1a/store', [Upsell1aController::class, 'store'])->name('upsell1a.store');

Route::post('/upsell2/store', [Upsell2Controller::class, 'store'])->name('upsell2.store');
