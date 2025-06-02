<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;

Route::get('/',  [UserContoller::class, 'showCorrectHomePage']);
Route::get('/about', function () {
    return view('single-post');
});
Route::post('/register', [UserContoller::class, 'register']);
Route::post('/login', [UserContoller::class, 'login']);
Route::post('/logout', [UserContoller::class, 'logout']);
