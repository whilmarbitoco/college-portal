<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SettingsController;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/program', [ProgramController::class, 'index'])
        ->name('admin.program');

    Route::get('/log', [LogController::class, 'index'])
        ->name('admin.log');

    Route::get('/settings', [SettingsController::class, 'index'])
        ->name('admin.settings');
});
