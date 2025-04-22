<?php

use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\SliderController;
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

Route::get('slider',[SliderController::class, 'execute'] )->name('slider');

Route::get('slider/create/new',[SliderController::class, 'create'] )->name('slider.create.new');

Route::put('slider/create/store',[SliderController::class, 'store'] )->name('slider.create.store');

Route::get('slider/{id}/edit',[SliderController::class, 'edit'] )->name('slider.edit');

Route::delete('slider/{id}/delete',[SliderController::class, 'destroy'] )->name('slider.delete');

