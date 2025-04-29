<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContoller;

Route::get('/', function () {
    return view('homepage');
});


Route::get('/about', function () {
    return view('single-post');
});


Route::post('/register', [UserContoller::class , 'register']);