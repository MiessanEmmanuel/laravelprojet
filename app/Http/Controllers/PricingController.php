<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function create()
    {
        $title = 'Pricing';
        return view('pricing', compact('title'));
    }

}
