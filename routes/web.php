<?php

use App\Http\Controllers\AnnouncementController;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $site = SiteInfo::find(1);

    return view('home', [
        'name' => $site->name,
        'acronym' => $site->acronym,
        'background' => $site->background,
        'description' => $site->description,
    ]);
});

Route::get('/about', function () {
    $site = SiteInfo::find(1);
    return view('about', [
        'name' => $site->name,
        'acronym' => $site->acronym,
        'story' => $site->story,
        'background' => $site->background,
        'description' => $site->description,
        'mission' => $site->mission,
        'vision' => $site->vision,
        'values' => $site->values
    ]);
});

Route::get('/announcements', [AnnouncementController::class, 'index']);

Route::get('/announcements/{id}', [AnnouncementController::class, 'specific']);

// Route::prefix('/profile')->group(function () {
//     Route::get('/', [ProfileController::class, 'index'])
//         ->name('profile');

//     Route::get('/edit', [ProfileController::class, 'create'])
//         ->name('profile.edit');
// });

require __DIR__ . '/auth.php';
require __DIR__ . '/student.php';
require __DIR__ . '/instructor.php';
require __DIR__ . '/admin.php';
