<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\employerController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::view("/home","pages.home")->name("home");
Route::view("/register","pages.registration")->name("registration");
Route::view("/login","pages.login")->name("login");
Route::get("/profile",[UserController::class,"loadUser"])->name("profile");
Route::get("/updateUser",[UserController::class,'showUpdateUser'])->name('updateUser');
// Route::view("/cardDetail",'pages.cardDetailPage', ['job' => $job])->name('cardDetail');
// Route::get('/cardDetail', function (Illuminate\Http\Request $request) {
//     $job = $request->query('job'); // Retrieve the 'job' query parameter
//     return view('pages.cardDetailPage', ['job' => $job]);
// })->name('cardDetail');

Route::get("/cardDetail/{id}",[UserController::class,'showCardDetail'])->name('cardDetail');




Route::post("/registarpost",[AuthController::class,"registar"])->name("registart.post");
Route::get("/logout",[AuthController::class,"logout"])->name("logout");
Route::post("/loginpost",[AuthController::class,"login"])->name("login.post");
Route::post("/updateUserPost",[UserController::class,'updateUser'])->name("updateUserPost");

Route::group(['prefix'=>'candidate','middleware'=>CheckRole::class.':candidate'],function(){

});

Route::group(['prefix'=>'admin','middleware'=>CheckRole::class.':admin'],function(){
    Route::view("/dashboard",'pages.adminDashboard')->name("admin.dashboard");
    Route::post("/approve-job/{id}",[AdminController::class,'approveJob'])->name("admin.approveJob");
});

Route::group(['prefix'=>'employer','middleware'=>CheckRole::class.':employer'],function(){
    Route::view("/dashboard",'pages.employerDashboard')->name("employer.dashboard");
    Route::view("/storeJob",'pages.storeJob')->name('storeJob');
    Route::get("/cardPage",[employerController::class,'loadJobs'])->name('cardPage');
    Route::post("/storeJobPost",[employerController::class,'storeJob'])->name('storeJob.post');
    Route::get("/editJob/{id}",[employerController::class,'showJobEdit'])->name('editJob');

    Route::post("/editJobPost/{id}",[employerController::class,'editJob'])->name('editJobPost');

    Route::post("deleteJob/{id}",[employerController::class,'deleteJob'])->name('deleteJob');

});

