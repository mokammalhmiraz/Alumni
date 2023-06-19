<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobApplyController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventApplyController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumCommentController;
use App\Http\Controllers\UserInfoController;

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







Auth::routes();


Route::get('job_post',  [JobController::class, 'jobpost']);
Route::get('jobs', [JobController::class, 'jobs']);
Route::get('all_jobs', [JobController::class, 'all_jobs']);
Route::post('job_post/insert',  [JobController::class, 'insert']);
Route::get("company", [JobController::class, 'details']);
Route::get("apply_job", [JobController::class, 'apply']);
Route::get("job_list/delete/{id}", [JobController::class, 'delete']);

Route::post("apply_job/insert", [JobApplyController::class, 'insert']);


Route::get("dashboard", [AdminController::class, 'dashboard']);
Route::get("alumni_list", [AdminController::class, 'userlist']);
Route::get("student_list", [AdminController::class, 'studentlist']);
Route::get("company_list", [AdminController::class, 'companylist']);
Route::get("request_list", [AdminController::class, 'requestlist']);
Route::get('companis',  [AdminController::class, 'companis']);
Route::get('alumni',  [AdminController::class, 'alumni']);


Route::get('forum',  [ForumController::class, 'forum']);
Route::post('forum/insert',  [ForumController::class, 'insert']);
Route::get('forum/view',  [ForumController::class, 'view']);

Route::post('forum/comment',  [ForumCommentController::class, 'insert']);



Route::get('edit',  [UserInfoController::class, 'insert']);
Route::post('info_update',  [UserInfoController::class, 'update']);
Route::post('edu_update',  [UserInfoController::class, 'update']);
Route::post('exp_update',  [UserInfoController::class, 'update']);
Route::post('photo_update',  [UserInfoController::class, 'update']);
Route::post('number_update',  [UserInfoController::class, 'update']);
Route::post('location_update',  [UserInfoController::class, 'update']);


Route::get('event_list',  [EventController::class, 'eventlist']);
Route::get('event_post',  [EventController::class, 'eventpost']);
Route::get('all_events',  [EventController::class, 'allevent']);
Route::get('event',  [EventController::class, 'event']);
Route::post('event_post/insert',  [EventController::class, 'insert']);
Route::get('event_list/delete/{id}',  [EventController::class, 'delete']);
Route::get('event_join_list',  [EventController::class, 'join_list']);

Route::get('event/update/{id}',  [EventApplyController::class, 'update']);


Route::get("request_list/delete/{id}", [AdminController::class, 'delete']);
Route::get("request_list/update/{id}", [AdminController::class, 'update']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
