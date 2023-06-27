<?php

use App\Http\Controllers\Auth\ShowLoginPageController;
use App\Http\Controllers\Auth\ShowRegisterPageController;
use Illuminate\Support\Facades\Route;

Route::get("login", ShowLoginPageController::class)->name("login");

Route::get("register", ShowRegisterPageController::class)->name("register");
