<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Developer\DashboardController;
use Illuminate\Support\Facades\Route;

// route public
Route::get("/", [LoginController::class, "index"]);
Route::group(['namespace' => 'App\Http\Controllers\Developer'], function () {
    Route::resource('dashboard', 'DashboardController');
});
