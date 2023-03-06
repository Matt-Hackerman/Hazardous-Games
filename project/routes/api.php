<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




route::resource('users', UsersController::class);

?>
Route::post('/login', [AuthController::class, 'login']);

