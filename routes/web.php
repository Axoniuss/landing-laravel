<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\Posts\CommentController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'welcome');

// Маршрут для отображения страницы /home
// Route::view('/home', 'welcome');

// Маршрут для лайка поста, которого нет в стандартных RESTful маршрутах
// Route::prefix('user')->middleware('auth', 'active')->group(function () {
Route::prefix('user')->group(function () {
    Route::redirect('/', '/user/posts')->name('user');

    Route::get('posts', [PostController::class, 'index'])->name('user.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('user.posts.show')->whereNumber('post');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit')->whereNumber('post');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('user.posts.update')->whereNumber('post');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('user.posts.delete')->whereNumber('post');
//40 создаl providers и нужно в роутсах распределить папки
    // Route::get('donates', DonateController::class)->name('user.donates');
});