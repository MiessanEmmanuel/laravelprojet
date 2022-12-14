<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplyController extends Controller
{
    public function create()
    {
        $title = 'Apply';
        $jobapplys = Apply::distinct()->get('lib');
        //dd( $jobapplys);
        return view('apply', [
            'title' =>  $title,
            'jobapplys' =>  $jobapplys]);
    }
}
