<?php

use Illuminate\Support\Facades\Route;

Route::get('/header', function () {
    return view('header');
});

Route::get('/home', function () {
    return view('home');
});