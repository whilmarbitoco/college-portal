<?php

use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\DashboardController;
use App\Http\Controllers\Instructor\EventController;
use App\Http\Controllers\Instructor\GradeController;

Route::middleware('role:instructor')->prefix('instructor')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('instructor.dashboard');

    Route::get('/course', [CourseController::class, 'index'])
        ->name('instructor.course');

    Route::get('/course/{id}', [CourseController::class, 'specific'])
        ->name('instructor.specific');

    Route::get('/grade', [GradeController::class, 'index'])
        ->name('instructor.grade');

    Route::get('/grade/{id}', [GradeController::class, 'specific'])
        ->name('instructor.grade.specific');

    Route::get('/event', [EventController::class, 'index'])
        ->name('instructor.event');

    Route::get('/event/add', [EventController::class, 'create'])
        ->name('instructor.event.add');
});
