<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Mockery\Undefined;

if(!isset($_SESSION)){ 
    session_start(); 
}

Route::get('/', function () {
    $games = DB::select("select GameID, Title, Description, Developer, URL, ThumbURL from games");
    return view('home')->with("games", $games);
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

Route::get('/bomb-defusal', function() {
    return view('/bd-game');
});

// Route::get('/premium', function () {
//     return view('premium');
// });

Route::get('/robco', function () {
    return view('games/RobCoHacker');
});

Route::get('/knucklebones', function () {
    return view('games/KnuckleBones');
});


Route::get('/frogger', function () {
    return view('frogger');
});

Route::get('/galaga', function () {
    return view('galaga');
});

Route::get('/game', function () {
    $gameID = $_GET["gameID"];
    if($gameID == NULL || $gameID == "Undefined"){
        $gameID = $_SESSION['gameID'];
        if($gameID == NULL || $gameID == "Undefined"){
            return redirect("/");
        }
    }
    $_SESSION['gameID'] = $gameID;

    $gameInfo = DB::select("select GameID, Title, Description, Developer, URL, ThumbURL from games where GameID = $gameID");
    return view('game')->with("gameInfo", $gameInfo);
});

