<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsletterRequest;

class ServiceController extends Controller
{
    public function create()
    {
        $title = 'Service';
        return view('services', compact('title'));
    }
    public function store(NewsletterRequest $request)
    {  
        
       $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        if($newsletter -> save()){
            $title = 'Service';
        return view('services', compact('title'));
        }
        
    }
}
