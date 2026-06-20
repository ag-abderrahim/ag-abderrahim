<?php

use App\Http\Controllers\admin\ADashboardController;
use App\Http\Controllers\admin\PermissionsController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\RolesController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\home\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Home
Route::group([], function () {
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('/projects', [PagesController::class, 'projects'])->name('public.projects');
    Route::get('/projects/{slug}', [PagesController::class, 'projectShow'])->name('public.projects.show');
});

// Admin
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->group(function () {
        // Admin Dashbaord
        Route::get('dashboard', [ADashboardController::class, 'dashbaord'])->name('admin.dashboard');

        Route::resource('permissions', PermissionsController::class);
        Route::resource('roles', RolesController::class);
        Route::post('/modifier-permissions/{id}', [RolesController::class, 'updatePermissions'])->name('addPermissions');
        Route::resource('users', UsersController::class);
        Route::resource('projects', ProjectController::class);
        Route::put('/users-toggle-active/{user}', [UsersController::class, 'toggleActive'])->name('users.active');
        Route::put('/users-toggle-verify/{user}', [UsersController::class, 'toggleVerify'])->name('users.verify');

        Route::post('/projects/{project}/gallery', [ProjectController::class, 'storeGallery'])
            ->name('projects.gallery.store');

        Route::delete('/projects/gallery/{id}', [ProjectController::class, 'deleteGallery'])
            ->name('projects.gallery.delete');

        Route::post('/projects/gallery/reorder', [ProjectController::class, 'reorderGallery'])
            ->name('projects.gallery.reorder');
            });


// User
Route::middleware(['auth', 'role:user'])
    ->prefix('user')
    ->group(function () {

    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
