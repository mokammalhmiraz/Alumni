<?php

use Illuminate\Support\Facades\Route;

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

Route::get('company', function () {
    return view('./company');
});
Route::get('companis', function () {
    return view('./companis');
});
Route::get('jobs', function () {
    return view('./joblist');
});
Route::get('readmore', function () {
    return view('./readmore');
});
Route::get('event', function () {
    return view('./event');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
