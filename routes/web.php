<?php

use App\Http\Controllers\PostController;
use App\RMVC\Route\Route;

Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show')->middleware('auth');

