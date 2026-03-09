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
}
