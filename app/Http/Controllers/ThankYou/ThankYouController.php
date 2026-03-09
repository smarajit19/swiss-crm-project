<?php

namespace App\Http\Controllers\ThankYou;

use App\Http\Controllers\Controller;

class ThankYouController extends Controller
{
    public function index()
    {
        $thankYouData = session('thank_you_data', []);

        $items = $thankYouData['items'] ?? [];
        $shippingAmount = (float) ($thankYouData['shipping_amount'] ?? 0);
        $subTotal = collect($items)->sum('amount');
        $total = (float) ($thankYouData['order_total'] ?? round($subTotal + $shippingAmount, 2));

        return view('thank-you.index', [
            'orderNumber' => $thankYouData['order_number'] ?? '',
            'orderDate' => $thankYouData['order_date'] ?? now()->format('m-d-Y'),
            'email' => $thankYouData['email'] ?? '',
            'currencySymbol' => $thankYouData['currency_symbol'] ?? '€',
            'items' => $items,
            'shippingAmount' => $shippingAmount,
            'shippingDisplay' => $thankYouData['shipping_display'] ?? '',
            'orderTotal' => $total,
            'orderTotalDisplay' => $thankYouData['order_total_display'] ?? '',
            'statementTotal' => (float) ($thankYouData['statement_total'] ?? $total),
            'statementTotalDisplay' => $thankYouData['statement_total_display'] ?? '',
            'statementDescriptor' => $thankYouData['statement_descriptor'] ?? 'TACTICAL SUPPLY 8668090004',
            'shippingAddress' => $thankYouData['shipping_address'] ?? [],
            'billingAddress' => $thankYouData['billing_address'] ?? [],
        ]);
    }
}
