<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('/auth/login');
});

Route::get('company', [HomeController::class, 'company']);

Route::get('jobs', [HomeController::class, 'jobs']);
Route::get('readmore', [HomeController::class, 'readmore']);
Route::get('event', [HomeController::class, 'event']);



Auth::routes();


Route::get('job_post',  [JobController::class, 'jobpost']);
Route::post('job_post/insert',  [JobController::class, 'insert']);
Route::get("company/details/{id}", [JobController::class, 'details']);


Route::get("dashboard", [AdminController::class, 'dashboard']);
Route::get("alumni_list", [AdminController::class, 'userlist']);
Route::get("student_list", [AdminController::class, 'studentlist']);
Route::get("company_list", [AdminController::class, 'companylist']);
Route::get("request_list", [AdminController::class, 'requestlist']);
Route::get('companis',  [AdminController::class, 'companis']);


Route::get("request_list/delete/{id}", [AdminController::class, 'delete']);
Route::get("request_list/update/{id}", [AdminController::class, 'update']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
