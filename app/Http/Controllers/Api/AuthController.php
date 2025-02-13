<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\auth\LoginRequest;
use App\Models\User;
use App\Http\Service\JwtService;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $jwtService;

    public function __construct(JwtService $jwtService)
    {
        $this->jwtService = $jwtService;
    }


    public function login(LoginRequest $request){

        $user = User::where("email", $request->email)->first();
        if(!$user){
            return "user not found";
        }
        if(! Hash::check($request->password,$user->password)){
            return response()->json([
                'error' => "invalid credential"
            ]);
        }

        // Generate token
        $token = $this->jwtService->generateToken($user);

        // Return token as a response
        return response()->json([
            'token' => $token
        ]);
    }
}
