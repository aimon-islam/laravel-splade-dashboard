<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ShowLoginPageController;
use App\Http\Controllers\Auth\ShowRegisterPageController;
use Illuminate\Support\Facades\Route;

// show login page
Route::get("login", ShowLoginPageController::class)->name("show.login");
// do login operation
Route::post("login", LoginController::class)->name("login");

// show registration page
Route::get("register", ShowRegisterPageController::class)->name("show.register");
// do register operation
Route::post("register", RegisterController::class)->name("register");

// do logout user
Route::post("logout", fn () => auth()->logout())->name("logout");
