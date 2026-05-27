<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\ThankYou\ThankYouController;
use App\Http\Controllers\Upsell\Upsell1aController;
use App\Http\Controllers\Upsell\Upsell2Controller;

Route::get('/', function () {
    return view('welcome');
});

$webRoutes = function (bool $named = false) {
    $checkout = Route::get('/checkout-now-v3', [CheckoutController::class, 'index']);
    $upsell1a = Route::get('/upsell1a', [Upsell1aController::class, 'index']);
    $upsell2 = Route::get('/upsell2', [Upsell2Controller::class, 'index']);
    $thankYou = Route::get('/thank-you', [ThankYouController::class, 'index']);

    if ($named) {
        $checkout->name('checkout-now-v3');
        $upsell1a->name('upsell1a');
        $upsell2->name('upsell2');
        $thankYou->name('thank-you');
    }
};

Route::prefix('total-heat-pro/offer/1')->group(function () use ($webRoutes) {
    Route::get('/', function () {
        return view('welcome');
    });

    $webRoutes(true);
});

$webRoutes();
