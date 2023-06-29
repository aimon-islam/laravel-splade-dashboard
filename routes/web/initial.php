<?php

use App\Http\Controllers\Initial\ShowHomePageController;
use Illuminate\Support\Facades\Route;

Route::get("/", ShowHomePageController::class)->middleware("auth")->name("home");

Route::get("/dashboard", ShowHomePageController::class)->middleware("auth")->name("dashboard");
