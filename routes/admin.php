<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\AdminDashboardController;

Route::get('dashboard', [AdminDashboardController::class, 'execute'])
->name('dashboard');

