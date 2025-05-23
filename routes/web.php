<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('/profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])
        ->name('profile');

    Route::get('/edit', [ProfileController::class, 'create'])
        ->name('profile.edit');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/student.php';
