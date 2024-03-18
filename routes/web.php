<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Developer\DashboardController;
use App\Http\Controllers\Developer\KelolaPenggunaMenuController;
use App\Http\Controllers\Developer\NotificationController;
use Illuminate\Support\Facades\Route;

// route public
Route::get("/", [LoginController::class, "index"]);
Route::post('/login', [LoginController::class, 'login']);
Route::post("/logout", [LoginController::class, 'logout'])->name('logout');

// route guest
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
});

// route authenticate to developer
Route::middleware(['auth', 'developer'])->group(function () {
    Route::resource('developer/dashboard/home', DashboardController::class);
    Route::resource('developer/dashboard/notification', NotificationController::class);
    Route::resource('developer/dashboard/kelola-pengguna', KelolaPenggunaMenuController::class);
});
