<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsletterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        $title = 'Service';
        return view('services', compact('title'));
    }
    public function store(NewsletterRequest $request )
    {  
        
        $newsletter = new Newsletter();

        $newsletter->newletter_email = $request->newletter_email;

        $newsletter -> save();
    }
}
