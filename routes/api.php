<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Middleware\HasRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login',[AuthController::class,'login'])->name('apiLogin');

Route::get('/welcome',function(){return "helloworld";})->name('welcome');

Route::group(['prefix' => 'admin', 'middleware' => HasRole::class . ':admin'], function () {
    Route::get('/admin',function(){return "hello admin";})->name('admin.admin');
});

Route::group(['prefix' => 'candidate', 'middleware' => HasRole::class . ':candidate'], function () {
    Route::get('/candidate',function(){return "hello candidate";})->name('candidate.candidate');
});

Route::group(['prefix' => 'employer', 'middleware' => HasRole::class . ':employer'], function () {
    Route::get('/employer',function(){return "hello employer";})->name('employer.employer');
});
