<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistarRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Flasher\Prime\flash;


class AuthController extends Controller
{

    public function registar(RegistarRequest $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if($request->roles){
            $user->roles = $request->roles;
        }
        $user->save();
        // flash()->success(message: 'Registration successfull.');
        return redirect()->route('login')->with('success','Registration successfull.');

    }

    public function login(LoginRequest $request){

        $crediental = $request->only('email','password');

        if(Auth()->attempt($crediental)){
            flash()->success('Login successfull.');
            if(Auth()->user()->roles == 'candidate'){
                return redirect()->route('home');
            }
            if(Auth()->user()->roles == 'employer'){
                return redirect()->route('employer.dashboard');
            }
            if(Auth()->user()->roles == 'admin'){
                return redirect()->route('admin.dashboard');
            }

        }else{
            // flash()->error("Invalid credential");
            return redirect()->route("login")->with("error","Invalid credential");
        }

    }

    public function logout(){
        Session()->flush();
        Auth::logout();
        return redirect()->route("home")->with("success",'logout success');
    }


}
