<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,string $role): Response
    {
        $roles=explode(",", Auth()->user()->roles);
            if(!in_array($role,$roles)){
                return redirect()->route("login")->withErrors("invalid user");
            }
        return $next($request);
    }
}
