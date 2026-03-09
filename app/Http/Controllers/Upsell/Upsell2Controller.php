<?php

namespace App\Http\Controllers\Upsell;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\SwissCrmService;

class Upsell2Controller extends Controller
{
    protected $crm;

    public function __construct(SwissCrmService $crm)
    {
        $this->crm = $crm;
    }

    public function index()
    {
        return view('upsell.upsell2');
    }

    public function store(Request $request)
    {
        try {
            $quantity = (int) $request->input('quantity', 1);
            $quantity = in_array($quantity, [1, 2, 3, 4, 5], true) ? $quantity : 1;

            $sessionToken = session('session_token');

            if (!$sessionToken) {
                return response()->json([
                    'status' => false,
                    'message' => 'Session token missing'
                ]);
            }

            $response = $this->crm->upsell2($sessionToken, $quantity);
            $this->storeUpsellInSession($quantity);

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

    private function storeUpsellInSession(int $quantity): void
    {
        $thankYouData = session('thank_you_data', []);

        if (empty($thankYouData)) {
            return;
        }

        $priceMap = [
            1 => 15.99,
            2 => 28.78,
            3 => 38.38,
            4 => 44.77,
            5 => 47.97,
        ];

        $price = $priceMap[$quantity] ?? $priceMap[1];

        $items = $thankYouData['items'] ?? [];
        $items = array_values(array_filter($items, fn ($item) => ($item['key'] ?? '') !== 'upsell2'));

        $items[] = [
            'key' => 'upsell2',
            'name' => 'Nano Car Cloth',
            'quantity' => $quantity,
            'amount' => (float) $price,
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
