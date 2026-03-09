<?php

namespace App\Http\Controllers\ThankYou;

use App\Http\Controllers\Controller;

class ThankYouController extends Controller
{
    public function index()
    {
        return view('thank-you.index');
    }
}
