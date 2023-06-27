<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ShowLoginPage;
use App\Http\Controllers\Auth\ShowRegisterPage;

Route::get("login", ShowLoginPage::class)->name("login");

Route::get("register", ShowRegisterPage::class)->name("register");
