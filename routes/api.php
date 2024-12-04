<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');