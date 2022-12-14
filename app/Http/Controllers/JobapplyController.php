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
    public function store($job)
    {
        
        $title = str_replace('-',' ',$job) ;
        $jobs = Apply::where('lib',str_replace('-',' ',$job))->get();
        //dd( $job);
        return view('jobapply', [
            'title' =>  $title,
            'jobs' =>  $jobs]);
            
    }
}
