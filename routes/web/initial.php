<?php

use App\Http\Controllers\Initial\ShowDashboardPageController;
use App\Http\Controllers\Initial\ShowHomePageController;
use App\Http\Controllers\Initial\ShowPricingPageController;
use Illuminate\Support\Facades\Route;

Route::get("/", ShowHomePageController::class)->name("home");

Route::get("/dashboard", ShowDashboardPageController::class)->middleware("auth")->name("dashboard");

Route::get("/pricing", ShowPricingPageController::class)->name("pricing");
