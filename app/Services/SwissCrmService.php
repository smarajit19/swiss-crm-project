<?php

namespace App\Services;

use Exception;

class SwissCrmService
{
    protected $apiUrl = 'https://codeclouds-api.swisscrm.com/api/v1/storefront';
    protected $authToken = 'Z8lH1E-V68DKlsAIXiOY_fChNc2_gFD8K1j5DNQkdi4=';

    protected $campaignMap = [
        59 => 42, // offer_id => campaign_id
        60 => 42,
        61 => 42,
        62 => 42,
        65 => 42,
        66 => 42,
    ];

    protected $productMap = [
        1 => 59,
        2 => 60,
        3 => 61,
        4 => 62,
        'jpp' => 66,
        'packopt' => 65,

    ];

    protected $upsell1 = [
        1 => 63,
    ];

    protected $upsell2 = [
        1 => 67,
        2 => 69,
        3 => 70,
        4 => 71,
        5 => 72,
    ];

    /**
     * Get campaign ID for a product
     */
    public function getCampaignId(int $quantity): int
    {
        $productId = $this->productMap[$quantity] ?? $this->productMap[1];
        return $this->campaignMap[$productId] ?? 42;
    }

    /**
     * Get product ID for a quantity
     */
    public function getProductId(int|string $quantity): int
    {
        return $this->productMap[$quantity] ?? $this->productMap[1];
    }

    /**
     * Call Click API
     */
    public function createClick(int $quantity, array $additionalData = [])
    {
        try {
            $campaignId = $this->getCampaignId($quantity);

            $payload = array_merge([
                "aff_id" => "00112121",
                "c1" => "c1",
                "c2" => "c2",
                "c3" => "c3",
                "additional_passed_values" => [],
                "campaign_id" => $campaignId,
                "ip_address" => $additionalData['ip_address'] ?? '127.0.0.1',
                "geo_state" => $additionalData['geo_state'] ?? '',
                "geo_country" => $additionalData['geo_country'] ?? '',
                "device" => $additionalData['device'] ?? 'Desktop',
            ], $additionalData);

            $response = $this->post('clicks', $payload);

            if (!isset($response['data']['attributes']['session_token'])) {
                throw new Exception("Session token not returned from Click API");
            }

            $sessionToken = $response['data']['attributes']['session_token'];

            session(['session_token' => $sessionToken]);
            return $sessionToken;

        } catch (Exception $e) {
            throw new Exception("Click API error: " . $e->getMessage());
        }
    }

    /**
     * Create lead
     */
    public function createLead(string $sessionToken, array $leadData)
    {
        try {
            $payload = [
                "session_token" => $sessionToken,
                "lead" => $leadData
            ];

            return $this->post('leads', $payload);
        } catch (Exception $e) {
            throw new Exception("Leads API error: " . $e->getMessage());
        }
    }

    /**
     * Checkout order
     */
    public function checkout(string $sessionToken, int $quantity, array $orderData)
    {
        try {
            $productId = $this->getProductId($quantity);

            $payload = array_merge($orderData, [
                "session_token" => $sessionToken,
                "order" => array_merge($orderData['order'] ?? [], [
                    // "campaign_product_ids" => [$productId]
                    "campaign_product_ids" => $orderData['order']['campaign_product_ids'] ?? [$productId]
                ]),
                "pixel_data" => []
            ]);

            return $this->post('orders/checkout', $payload);
        } catch (Exception $e) {
            throw new Exception("Checkout API error: " . $e->getMessage());
        }
    }

    /**
     * POST helper
     */
    protected function post(string $endpoint, array $payload)
    {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL => $this->apiUrl . '/' . $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => [
                'Authorization: ' . $this->authToken,
                'Content-Type: application/json'
            ],
        ]);

        $result = curl_exec($ch);
        $error = curl_error($ch);
        // dd($result);
        curl_close($ch);

        if ($error) {
            throw new Exception("cURL Error: " . $error);
        }

        $decoded = json_decode($result, true);

        if (!$decoded) {
            throw new Exception("Invalid JSON response from API");
        }

        return $decoded;
    }

    // Upsell order
    public function upsell(string $sessionToken, int $step = 1)
    {
        try {

            $productId = $this->upsell1[$step] ?? $this->upsell1[1];

            $payload = [
                "session_token" => $sessionToken,
                "order" => [
                    "campaign_product_ids" => [$productId]
                ]
            ];

            return $this->post('orders/upsell', $payload);
        } catch (Exception $e) {
            throw new Exception("Upsell API error: " . $e->getMessage());
        }
    }

    // Upsell2 order (quantity-based product IDs)
    public function upsell2(string $sessionToken, int $quantity = 1)
    {
        try {
            $productId = $this->upsell2[$quantity] ?? $this->upsell2[1];

            $payload = [
                "session_token" => $sessionToken,
                "order" => [
                    "campaign_product_ids" => [$productId]
                ]
            ];

            return $this->post('orders/upsell', $payload);
        } catch (Exception $e) {
            throw new Exception("Upsell API error: " . $e->getMessage());
        }
    }
}
