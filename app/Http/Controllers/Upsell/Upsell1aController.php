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
        return view('upsell.upsell1a');
    }

    public function store(Request $request)
    {
        try {

            $sessionToken = session('session_token');

            if(!$sessionToken){
                return response()->json([
                    'status'=>false,
                    'message'=>'Session token missing'
                ]);
            }

            $response = $this->crm->upsell($sessionToken,1);
            $this->storeUpsellInSession();

            return response()->json([
                'status'=>true,
                'data'=>$response
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage()
            ]);
        }
    }

    private function storeUpsellInSession(): void
    {
        $thankYouData = session('thank_you_data', []);

        if (empty($thankYouData)) {
            return;
        }

        $items = $thankYouData['items'] ?? [];
        $items = array_values(array_filter($items, fn ($item) => ($item['key'] ?? '') !== 'upsell1a'));

        $items[] = [
            'key' => 'upsell1a',
            'name' => 'Vital Smart Glasses + VIP Offer',
            'quantity' => 1,
            'amount' => 59.99,
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
