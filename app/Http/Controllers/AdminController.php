<?php

namespace App\Http\Controllers;

use App\Http\Service\JobService;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    public function approveJob(int $id){
        $this->jobService->approveJob($id);
        return back()->with('success','Job approved successfully');
    }
}
