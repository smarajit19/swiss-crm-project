<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Services\SwissCrmService;

class CheckoutController extends Controller
{

    protected $crmService;

    public function __construct(SwissCrmService $crmService)
    {
        $this->crmService = $crmService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('checkout.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'packageQuantity' => 'required|integer|min:1',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            // Shipping fields individually
            'shippingAddress1' => 'required|string',
            'shippingAddress2' => 'nullable|string',
            'shippingCity'     => 'required|string',
            'shippingState'    => 'required|string',
            'shippingCountry'  => 'required|string',
            'shippingZip'      => 'required|string',
            // Card fields
            'creditCardNumber' => 'required|digits_between:13,16',
            'expirationDate'   => 'required|string', // MM/YY
            'CVV'              => 'required|digits_between:3,4',
        ]);

        $shippingAddress = [
            'ship_address1' => $request->shippingAddress1,
            'ship_address2' => $request->shippingAddress2 ?? '',
            'ship_city'     => $request->shippingCity,
            'ship_state'    => $request->shippingState,
            'ship_country'  => $request->shippingCountry,
            'ship_postal_code' => $request->shippingZip,
            'ship_unit'     => $request->shippingUnit ?? ''
        ];

        try {
            $quantity = $request->packageQuantity;

            /*
            |--------------------------------------------------------------------------
            | Build campaign product IDs
            |--------------------------------------------------------------------------
            */

            $campaignProductIds = [
                $this->crmService->getProductId($quantity)
            ];

            foreach (['packopt', 'jpp'] as $opt) {
                if ($request->$opt === 'on') {
                    $campaignProductIds[] = $this->crmService->getProductId($opt);
                }
            }
            // dd($campaignProductIds);

            $exp = str_replace(' ', '', $request->expirationDate); // remove spaces
            [$month, $year] = explode('/', $exp);
            $year = '20' . $year; // convert YY → YYYY

            $card = [
                'month' => $month,
                'year'  => $year,
                'number' => $request->creditCardNumber,
                'cvv'   => $request->CVV,
                'name'  => $request->firstName . ' ' . $request->lastName
            ];

            $sessionToken = $this->crmService->createClick($quantity, $request->additional_data ?? []);

            $leadResponse = $this->crmService->createLead($sessionToken, [
                'first_name' => $request->firstName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'phone' => $request->phone,
                'ship_unit' => $shippingAddress['ship_unit'],
                'ship_address1' => $shippingAddress['ship_address1'],
                'ship_address2' => $shippingAddress['ship_address2'] ?? '',
                'ship_city' => $shippingAddress['ship_city'],
                'ship_state' => $shippingAddress['ship_state'],
                'ship_country' => $shippingAddress['ship_country'],
                'ship_postal_code' => $shippingAddress['ship_postal_code'],
                'locale' => $request->locale ?? 'en-US',
                'additional_details' => $request->additional_details ?? []
            ]);

            $checkoutResponse = $this->crmService->checkout($sessionToken, $quantity, [
                "order" => [
                    "cc_risk_data" => "",
                    "payment_source_attributes" => [
                        "card" => $card,
                        "redirect_links" => [
                            "success_url" => $request->success_url ?? url('/')
                        ],
                        "hosted" => false
                    ],
                    "use_shipping_address" => true,
                    "campaign_product_ids" => $campaignProductIds
                ]
            ]);

            return response()->json([
                'status' => true,
                'lead' => $leadResponse,
                'checkout' => $checkoutResponse,
                'redirect_url' => url('/total-heat-pro/upsell1a')
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
