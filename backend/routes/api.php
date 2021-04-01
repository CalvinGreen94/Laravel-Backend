<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::post("register", [AuthController::class, "register"]);
// Route::post('register', ['as' => 'register', 'uses' => 'AuthController@register']);
