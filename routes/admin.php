<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('admin/dashboard', [AdminDashboardController::class, 'execute'])
->name('admin.dashboard');
