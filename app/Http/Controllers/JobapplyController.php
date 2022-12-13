<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobapplyController extends Controller
{
    public function create()
    {
        $title = 'Jobapply' ;
        return view('jobapply', [
            'title' =>  $title]);
    }
}
