<?php
use Illuminate\Support\Facades\Route;

if(!isset($_SESSION)){ 
    session_start(); 
}

Route::get('/', function () {
    return view('home');
});

Route::get('/header', function () {
    return view('header');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/premium', function () {
    return view('premium');
});

