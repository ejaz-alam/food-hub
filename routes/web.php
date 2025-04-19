<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserDashboardController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;

Route::get('/', [FrontendController::class, 'execute'])->name('frontend.home'); // frontend separate controller


Route::get('admin/login', [\App\Http\Controllers\Admin\AdminAuthController::class, 'execute'])
    ->name('admin.login');

Route::group(['middleware' => 'auth'], function () {

    Route::get('customer/account/dashboard', [UserDashboardController::class, 'execute'])
        ->name('customer.account.dashboard');

    Route::put('customer/profile/update', [UserProfileController::class, 'update'])
        ->name('customer.profile.update');
});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

require __DIR__.'/auth.php';

