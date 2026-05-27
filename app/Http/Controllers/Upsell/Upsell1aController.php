<?php

namespace App\Http\Controllers\Upsell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SwissCrmService;

class Upsell1aController extends Controller
{
    protected $crm;

    public function __construct(SwissCrmService $crm)
    {
        $this->crm = $crm;
    }

    public function index()
    {
        // echo 1;exit;
        return view('upsell.upsell1a');
    }

    public function store(Request $request)
    {
        try {

            $sessionToken = session('session_token');

            if (!$sessionToken) {
                return response()->json([
                    'status' => false,
                    'message' => 'Session token missing'
                ]);
            }
            $upsellPrice = $request->input('upsell_price');
            $vipPrice = $request->input('vip_price');

            $response = $this->crm->upsell($sessionToken, 1);
            $this->storeUpsellInSession($upsellPrice, $vipPrice);

            return response()->json([
                'status' => true,
                'data' => $response
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    private function storeUpsellInSession($upsellPrice, $vipPrice): void
    {
        $thankYouData = session('thank_you_data', []);

        if (empty($thankYouData)) {
            return;
        }

        $items = $thankYouData['items'] ?? [];

        // Remove old upsell1a and vip items if already exist
        $items = array_values(array_filter($items, function ($item) {
            return !in_array($item['key'] ?? '', ['upsell1a', 'vip_upsell']);
        }));

        // Main Upsell Product
        $items[] = [
            'key' => 'upsell1a',
            'name' => 'Vital Smart Glasses',
            'quantity' => 1,
            'amount' => (float) $upsellPrice,
        ];

        // VIP Recurring Product
        $items[] = [
            'key' => 'vip_upsell',
            'name' => 'VIP Monthly Subscription',
            'quantity' => 1,
            'amount' => (float) $vipPrice,
            'type' => 'recurring'
        ];

        $shipping = (float) ($thankYouData['shipping_amount'] ?? 0);

        $subtotal = collect($items)->sum('amount');
        $total = round($subtotal + $shipping, 2);

        $thankYouData['items'] = $items;
        $thankYouData['order_total'] = $total;
        $thankYouData['statement_total'] = $total;

        session(['thank_you_data' => $thankYouData]);
    }
}
