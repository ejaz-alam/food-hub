<?php

use App\Http\Controllers\Admin\AdminProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AdminDashboardController;

Route::get('dashboard', [AdminDashboardController::class, 'execute'])
->name('dashboard');

Route::get('profile', [AdminProfileController::class, 'execute'])
    ->name('profile');

Route::put('profile', [AdminProfileController::class, 'update'])
    ->name('profile.update');

Route::put('profile/password', [AdminProfileController::class, 'updatePassword'])
    ->name('password.update');

