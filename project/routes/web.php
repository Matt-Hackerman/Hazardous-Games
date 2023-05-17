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

Route::get('/simon-says', function() {
    return view('/simon-says');
});

Route::get('/premium', function () {
    return view('premium');
});

Route::get('/GameTest', function () {
    return view('games/KnuckleBones');
});


Route::get('/frogger', function () {
    return view('frogger');
});

Route::get('/galaga', function () {
    return view('galaga');
});

Route::get('/game', function () {
    return view('game');
});

