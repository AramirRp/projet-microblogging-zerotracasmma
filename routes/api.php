<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

// Si vous utilisez un contrôleur de ressources
Route::resource('posts', PostController::class);

// Ou si vous préférez définir les routes individuellement :
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Route pour gérer les likes
Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

// Route pour ajouter un commentaire
Route::post('/posts/{post}/comment', [PostController::class, 'addComment'])->name('posts.comment');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
