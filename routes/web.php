<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
});
