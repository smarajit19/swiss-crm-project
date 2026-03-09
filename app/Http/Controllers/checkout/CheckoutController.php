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

            $packageCatalog = [
                1 => ['name' => '1x Total Heat Pro Single Pack', 'price' => 111.10],
                2 => ['name' => '2x Total Heat Pros Studio Pack', 'price' => 199.98],
                3 => ['name' => '3x Total Heat Pros Multi Pack', 'price' => 266.64],
                4 => ['name' => '4x Total Heat Pros Deluxe Pack', 'price' => 311.09],
            ];

            $selectedPackage = $packageCatalog[$quantity] ?? $packageCatalog[1];

            $items = [
                [
                    'key' => 'main_package',
                    'name' => $selectedPackage['name'],
                    'quantity' => 1,
                    'amount' => (float) $selectedPackage['price'],
                ]
            ];

            if ($request->packopt === 'on') {
                $items[] = [
                    'key' => 'packopt',
                    'name' => 'Total Heat Pro Coverage',
                    'quantity' => 1,
                    'amount' => 9.95,
                ];
            }

            if ($request->jpp === 'on') {
                $items[] = [
                    'key' => 'jpp',
                    'name' => 'Journey Package Protection',
                    'quantity' => 1,
                    'amount' => 3.50,
                ];
            }

            $checkoutAttributes = data_get($checkoutResponse, 'data.attributes', []);
            $displayShipTotal = (string) ($checkoutAttributes['display_ship_total'] ?? '');
            $displayOrderTotal = (string) ($checkoutAttributes['display_total'] ?? '');
            $displayPaymentTotal = (string) ($checkoutAttributes['display_payment_total'] ?? '');

            $currencySymbol = '€';
            foreach ([$displayOrderTotal, $displayShipTotal, $displayPaymentTotal] as $displayValue) {
                if (!empty($displayValue) && preg_match('/[^0-9.,\s\-]/u', $displayValue, $matches)) {
                    $currencySymbol = $matches[0];
                    break;
                }
            }

            $shippingAmount = (float) ($request->dynamic_shipping_charge ?? 0);
            if (!empty($displayShipTotal)) {
                $parsedShipTotal = preg_replace('/[^0-9.\-]/', '', $displayShipTotal);
                if ($parsedShipTotal !== '' && is_numeric($parsedShipTotal)) {
                    $shippingAmount = (float) $parsedShipTotal;
                }
            }

            $subTotal = collect($items)->sum('amount');
            $grandTotal = round($subTotal + $shippingAmount, 2);

            $billingAddress = [
                'name' => trim(($request->firstName ?? '') . ' ' . ($request->lastName ?? '')),
                'address1' => $request->billingAddress1 ?: $request->shippingAddress1,
                'address2' => $request->billingAddress2 ?: $request->shippingAddress2,
                'city' => $request->billingCity ?: $request->shippingCity,
                'state' => $request->billingState ?: $request->shippingState,
                'country' => $request->billingCountry ?: $request->shippingCountry,
                'zip' => $request->billingZip ?: $request->shippingZip,
            ];

            $shippingAddressData = [
                'name' => trim(($request->firstName ?? '') . ' ' . ($request->lastName ?? '')),
                'address1' => $request->shippingAddress1,
                'address2' => $request->shippingAddress2,
                'city' => $request->shippingCity,
                'state' => $request->shippingState,
                'country' => $request->shippingCountry,
                'zip' => $request->shippingZip,
            ];

            session([
                'thank_you_data' => [
                    'order_number' => data_get($checkoutResponse, 'data.attributes.number')
                        ?? data_get($checkoutResponse, 'data.attributes.order_id')
                        ?? data_get($checkoutResponse, 'data.id')
                        ?? '',
                    'order_date' => now()->format('m-d-Y'),
                    'email' => $request->email,
                    'currency_symbol' => $currencySymbol,
                    'items' => $items,
                    'shipping_amount' => round($shippingAmount, 2),
                    'shipping_display' => $displayShipTotal,
                    'order_total' => $grandTotal,
                    'order_total_display' => $displayOrderTotal,
                    'statement_total' => $grandTotal,
                    'statement_total_display' => $displayPaymentTotal,
                    'statement_descriptor' => 'TACTICAL SUPPLY 8668090004',
                    'shipping_address' => $shippingAddressData,
                    'billing_address' => $billingAddress,
                ]
            ]);

            return response()->json([
                'status' => true,
                'lead' => $leadResponse,
                'checkout' => $checkoutResponse,
                'redirect_url' => url('/total-heat-pro/offer/1/upsell1a')
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
