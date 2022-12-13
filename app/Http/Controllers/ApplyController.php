<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function create()
    {
        $title = 'Apply' ;
        return view('apply', [
            'title' =>  $title]);
    }
}
