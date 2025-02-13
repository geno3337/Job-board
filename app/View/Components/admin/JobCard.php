<?php

namespace App\View\Components\admin;

use App\Http\Service\JobService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JobCard extends Component
{
    public $jobs;
    protected  $jobService;

    /**
     * Create a new component instance.
     */
    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
        $this->jobs = $this->jobService->loadJobs();
    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.job-card');
    }
}
