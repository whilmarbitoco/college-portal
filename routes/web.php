<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ProfileController;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['site' => SiteInfo::find(1)]);
});

Route::get('/about', function () {
    return view('about', ['site' => SiteInfo::find(1)]);
});

Route::get('/program', function () {
    return view('program', ['site' => SiteInfo::find(1)]);
});

Route::get('/announcements', [AnnouncementController::class, 'index']);

Route::get('/announcements/{id}', [AnnouncementController::class, 'specific']);

Route::prefix('/profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])
        ->name('profile');

    Route::get('/edit', [ProfileController::class, 'create'])
        ->name('profile.edit');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/student.php';
require __DIR__ . '/instructor.php';
require __DIR__ . '/admin.php';
