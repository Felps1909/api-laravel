<?php
namespace App\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Job;

class JobsController extends Controller
{
    public function index()
        {
            $jobs = Job::with('company')->get();
            return response()->json($jobs);
            
        }
}