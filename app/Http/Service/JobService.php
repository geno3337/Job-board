<?php

namespace App\Http\Service;

use App\Http\Job\Requests\StoreJobsRequest;
use App\Models\Jobs;
use Request;


class JobService
{


    public function addJob($request)
    {

        $job = new Jobs();
        $job->jobRole = $request->jobRole;
        $job->jobArea = $request->jobArea;
        $job->skillsRequired = $request->skillsRequired;
        $job->salary = $request->salary;
        $job->company = $request->company;
        $job->location = $request->location;
        $job->experience = $request->experience;
        $job->discription = $request->discription;
        $job->applyLink = $request->applyLink;
        $job->postedBy = Auth()->user()->name;
        return $job->save();

    }

    // public function editJob(int $id,$request){
    //     $job = Jobs::where('id',$id)->where('deleted_at',null)->first();
    //     if($job->isAproved == true){
    //         return 'job is approved so it cannot be edit';
    //     }
    //     $job->jobRole = $request->jobRole;
    //     $job->jobArea = $request->jobArea;
    //     $job->skillsRequired = $request->skillsRequired;
    //     $job->salary = $request->salary;
    //     $job->company = $request->company;
    //     $job->location = $request->location;
    //     $job->experience = $request->experience;
    //     $job->discription = $request->discription;
    //     $job->applyLink = $request->applyLink;
    //     $job->postedBy = Auth()->user()->name;
    //     return $job->save();
    // }


    public function editJob(int $id, $request)
{
    // Find the job
    $job = Jobs::where('id', $id)->whereNull('deleted_at')->first();

    // Check if the job exists
    if (!$job) {
        return [
            'success' => false,
            'message' => 'Job not found',
            'status_code' => 404
        ];
    }

    // Check if the job is already approved
    if ($job->isAproved == true) {
        return [
            'success' => false,
            'message' => 'Job is approved and cannot be edited',
            'status_code' => 403
        ];
    }

    // Update the job details
    $job->jobRole = $request->jobRole;
    $job->jobArea = $request->jobArea;
    $job->skillsRequired = $request->skillsRequired;
    $job->salary = $request->salary;
    $job->company = $request->company;
    $job->location = $request->location;
    $job->experience = $request->experience;
    $job->discription = $request->discription;
    $job->applyLink = $request->applyLink;
    $job->postedBy = Auth()->user()->name;

    // Save the job and return a response
    if ($job->save()) {
        return [
            'success' => true,
            'message' => 'Job updated successfully',
            'status_code' => 200
        ];
    }

    return [
        'success' => false,
        'message' => 'Failed to update job',
        'status_code' => 500
    ];
}



    public function loadJobs()
    {
        return Jobs::where('deleted_at', null)->get();
    }

    public function loadJobById($id)
    {
        return Jobs::where('deleted_at', null)->where('id', $id)->first();
    }



    public function loadApprovedJobs()
    {
        return Jobs::where('deleted_at', null)->where('isAproved', 1)->get();
    }

    public function approveJob(int $id)
    {
        $job = Jobs::where("deleted_at", null)->where('isAproved', false)->where('id', $id)->update(['isAproved' => true]);
        // if($job == null){
        //     return "job not found";
        // }
        // $job->isApproved = true;
        // $job->save();
        return "job approved successfully";
    }

    public function deleteJob(int $id)
    {
        return Jobs::where('id', $id)->delete();
    }

}
