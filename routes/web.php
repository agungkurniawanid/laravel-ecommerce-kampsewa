<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// route public
Route::get("/", [LoginController::class, "index"]);