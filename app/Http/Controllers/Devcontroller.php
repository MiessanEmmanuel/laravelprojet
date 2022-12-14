<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Devcontroller extends Controller
{
    public function create()
    {
        $title = 'Applydev';
        $jobapplys = Apply::all();
        //dd( $jobapplys);
        return view('jobapply', [
            'title' =>  $title,
            'jobapplys' =>  $jobapplys]);
    }
}
