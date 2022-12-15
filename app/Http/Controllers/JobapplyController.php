<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobapplyController extends Controller
{
    public function create()
    {
        $title = 'Jobapply' ;
        return view('jobapply', [
            'title' =>  $title]);
    }
    
}
