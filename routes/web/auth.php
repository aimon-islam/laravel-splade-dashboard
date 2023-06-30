<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ShowLoginPageController;
use App\Http\Controllers\Auth\ShowRegisterPageController;
use Illuminate\Support\Facades\Route;

// show login page
Route::get("login", ShowLoginPageController::class)->middleware("guest")->name("login");
// do login operation
Route::post("login", LoginController::class)->name("do.login");

// show registration page
Route::get("register", ShowRegisterPageController::class)->middleware("guest")->name("register");
// do register operation
Route::post("register", RegisterController::class)->name("do.register");

// do logout user
Route::delete("logout", function () {
    auth()->logout();
    return redirect("/");
})->name("logout");
