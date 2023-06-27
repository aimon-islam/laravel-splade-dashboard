<?php

use App\Http\Controllers\Initial\ShowHomePageController;
use Illuminate\Support\Facades\Route;

Route::get("/", ShowHomePageController::class)->middleware("auth");

Route::get("/home", ShowHomePageController::class)->middleware("auth")->name("home");
