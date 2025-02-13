<?php

namespace App\Http\Controllers;


use App\Http\Requests\Job\StoreJobsRequest;
use App\Http\Requests\Job\UpdateJobsRequest;
use App\Http\Service\JobService;
use App\Models\Jobs;
use Illuminate\Http\Request;

class employerController extends Controller
{

    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }


    public function storeJob(StoreJobsRequest $request)
    {

        $this->jobService->addJob($request);

        return redirect()->route('storeJob')->with('success', 'Job add successfull');

    }

    public function loadJobs()
    {
        $jobs = $this->jobService->loadJobs();
        return view("pages.cardPage", ['jobs' => $jobs]);

    }

    public function showJobEdit($id)
    {

        $job = $this->jobService->loadJobById($id);
        return view("pages.updateJob", ['job' => $job]);
    }

    public function editJob(UpdateJobsRequest $request, $id)
    {
        // Call the service layer
        $response = $this->jobService->editJob($id, $request);

        // Handle errors based on the response
        if (!$response['success']) {
            // Redirect back with an error message
            return redirect()
                ->route('editJob', $id)
                ->with('error', $response['message']);
        }

        // Redirect with a success message
        return redirect()
            ->route('editJob', $id)
            ->with('success', $response['message']);
    }

    public function deleteJob($id)
    {
        $this->jobService->deleteJob($id);
        return back()->with('success', 'Job deleted');
    }

}
