<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');

    Route::get('/program', [ProgramController::class, 'index'])
        ->name('admin.program');

    Route::get('/program/add', [ProgramController::class, 'create'])
        ->name('admin.program.create');

    Route::get('/log', [LogController::class, 'index'])
        ->name('admin.log');

    Route::get('/settings', [SettingsController::class, 'index'])
        ->name('admin.settings');

    Route::get('/user', [UserController::class, 'index'])
        ->name('admin.user');

    Route::post('/settings/siteinfo', [SettingsController::class, 'updateSiteInfo'])
        ->name('admin.settings.siteinfo');

    Route::post("/program/add", [ProgramController::class, "store"])->name("admin.program.store");
});
