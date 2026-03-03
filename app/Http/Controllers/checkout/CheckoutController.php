<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
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
        dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'firstName' => 'required',
            'lastName' => 'required',
            'shippingAddress1' => 'required',
            'shippingCity' => 'required',
            'shippingZip' => 'required',
        ]);

        // Example: Access data
        $email = $request->email;
        $packageQty = $request->packageQuantity;
        $price = $request->individualPrice;
        $regPrice = $request->regprice;

        // Process payment here...

        return response()->json([
            'status' => 'success',
            // 'redirect_url' => route('thankyou')
        ]);
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
