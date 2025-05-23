<?php

use App\Http\Controllers\Student\CourseController;
use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\GradeController;

Route::prefix('student')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('student.dashboard');

    Route::get('/course', [CourseController::class, 'index'])
        ->name('student.course');

    Route::get('/course/{id}', [CourseController::class, 'specific'])
        ->name('student.specific');

    Route::get('/grade', [GradeController::class, 'index'])
        ->name('student.grade');
});
