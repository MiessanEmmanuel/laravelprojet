<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function service()
    {
        $title = 'Service';
        return view('services', compact('title'));
    }
}
