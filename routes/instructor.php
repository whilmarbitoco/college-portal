<?php

use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\DashboardController;

Route::prefix('instructor')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('instructor.dashboard');

    Route::get('/course', [CourseController::class, 'index'])
        ->name('instructor.course');

    Route::get('/course', [CourseController::class, 'specific'])
        ->name('instructor.specific');
});
