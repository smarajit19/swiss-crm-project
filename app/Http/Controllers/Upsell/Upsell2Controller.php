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
}
