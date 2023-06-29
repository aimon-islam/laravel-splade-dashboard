<?php

use App\Http\Controllers\Initial\ShowDashboardPageController;
use App\Http\Controllers\Initial\ShowHomePageController;
use Illuminate\Support\Facades\Route;

Route::get("/", ShowHomePageController::class)->name("home");

Route::get("/dashboard", ShowDashboardPageController::class)->middleware("auth")->name("dashboard");
