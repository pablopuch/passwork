<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassworkController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GoogleController;

Route::resource('passwork', PassworkController::class)->middleware('auth');

Auth::routes(['register'=>false, 'login'=>false]);

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [PassworkController::class, 'index'])->name('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
});
  
Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});