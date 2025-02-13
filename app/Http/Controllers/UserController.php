<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\UpdateUserRequest;
use App\Http\Service\JobService;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $jobService;

    public function __construct(JobService $jobService)
    {
        $this->jobService = $jobService;
    }

    function loadUser(){
        // $id = auth()->user()->id;
        // return User::find($id);
        // return auth()->user();
        // return response()->json(auth()->user(), 200,"user load successfull");
        return view("pages.profile",['user'=>Auth()->user()]);
    }

    public function showUpdateUser(){
        return view("pages.updateUser",['user'=>Auth()->user()]);
    }

    public function updateUser(UpdateUserRequest $request){
        $user = User::find(Auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile')->with('success','User update successfull.');
    }

    public function showCardDetail($id){
        $job= $this->jobService->loadJobById($id);
        return view('pages.cardDetailPage', ['job' => $job]);
    }

}
