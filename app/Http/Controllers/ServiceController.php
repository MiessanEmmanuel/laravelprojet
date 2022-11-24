<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create()
    {
        $title = 'Service';
        return view('services', compact('title'));
    }
}
