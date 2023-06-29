<?php

use App\Http\Controllers\Initial\ShowHomePageController;
use Illuminate\Support\Facades\Route;

Route::get("/dashboard", ShowHomePageController::class)->middleware("auth")->name("dashboard");
