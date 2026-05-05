<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// rotte CRUD per la tabella posts (usando resource)
Route::resource("posts", PostController::class)
    ->middleware(['auth', 'verified']);

// rotte CRUD per la tabella tags (usando resource)
Route::resource("tags", TagController::class)
    ->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
