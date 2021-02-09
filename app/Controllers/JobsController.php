<?php

// namespace App\Controllers;

// use App\Models\Job;
// use Illuminate\Http\Request;

// use App\Http\Requests;
// use App\Http\Controllers\Controller;

// class JobsController extends Controller
// {
//     public function index()
//     {
//         $jobs = Job::with('company')->get();
//         return response()->json($jobs);
//     }
// }

namespace App\Controllers;

use App\Controllers\Controller;

class JobsController extends Controller
{
    public function index()
    {
        die("Oi");
    }
}