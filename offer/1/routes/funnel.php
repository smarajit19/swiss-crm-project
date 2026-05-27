<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Checkout\CheckoutController;
use App\Http\Controllers\Upsell\Upsell1aController;
use App\Http\Controllers\Upsell\Upsell2Controller;

$funnelRoutes = function (bool $named = false) {
    $checkout = Route::post('/checkout-frm-submit', [CheckoutController::class, 'store']);
    $upsell1a = Route::post('/upsell1a/store', [Upsell1aController::class, 'store']);
    $upsell2 = Route::post('/upsell2/store', [Upsell2Controller::class, 'store']);

    if ($named) {
        $checkout->name('checkout-frm-submit');
        $upsell1a->name('upsell1a.store');
        $upsell2->name('upsell2.store');
    }
};

Route::prefix('total-heat-pro/offer/1')->group(fn () => $funnelRoutes(true));
$funnelRoutes();
