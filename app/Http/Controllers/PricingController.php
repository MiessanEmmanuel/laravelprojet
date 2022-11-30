<?php

namespace App\Http\Controllers;


use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class PricingController extends Controller
{
    public function create()
    {
        $title = 'Pricing';
        return view('pricing', compact('title'));
    }
    public function store(NewsletterRequest $request)
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
            $title = 'Pricing';
            return view('pricing', compact('title'));
        } 
    }
}
