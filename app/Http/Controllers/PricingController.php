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
        $value_menu_pricing = 'active';
        return view('pricing', compact('title','value_menu_pricing'));
    }
    public function store(NewsletterRequest $request)
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
            $title = 'Pricing';
        $value_menu_pricing = 'active';
        return view('pricing', compact('title','value_menu_pricing'));
        } 
    }
}
